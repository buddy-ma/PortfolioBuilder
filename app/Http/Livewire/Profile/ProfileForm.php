<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class ProfileForm extends Component implements HasForms
{
    use InteractsWithForms;

    public string $uuid;
    // public null|string $bio = null;
    public $logo, $title;
    public $bio, $image, $numbers;
    public function mount(User $user): void
    {
        $this->uuid = $user->profile->uuid;
        $this->idd = $user->id;
        $this->bio = $user->profile->bio;
        $this->title = $user->profile->title;
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('General')
            ->description('General Informations of the website')
            ->schema([
                TextInput::make('title')->required(),
                FileUpload::make('logo')->image(),
            ]),
            Section::make('About')
            ->description('The about section')
            ->schema([
                MarkdownEditor::make('bio')->required(),
                FileUpload::make('image')->image(),
                Repeater::make('numbers')
                ->schema([
                    TextInput::make('number')->required()->numeric(),
                    TextInput::make('text')->required(),
                    TextInput::make('icon')->required()->helperText('You can find icons here : https://fontawesome.com/icons.'),
                ])->maxItems(4)->columns(3)
            ]),
        ];
    }

    public function submit(): void
    {   
        // $this->validate();
        foreach ($this->numbers as $key => $value) {
            $arr[] = json_encode($value);
            // dd(array_key_first($this->numbers[0]));
        }
        $profile = Profile::where('user_id', $this->idd)->first();
        $profile->title = $this->title;
        $profile->bio = $this->bio;
        $profile->numbers = json_encode($arr);
        if(isset($this->logo)){
            $key = array_key_first($this->logo);
            $imageName = $this->logo[$key]->getFileName();
            $profile->logo = $imageName;
        }
        if(isset($this->image)){
            $key2 = array_key_first($this->image);
            $imageName2 = $this->image[$key2]->getFileName();
            $profile->image = $imageName2;
        }
        $profile->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved succesfully!',
        ]);
    }

    // protected function rules(): array
    // {
    //     return [
    //         'title' => [
    //             'required',
    //             'string',
    //         ],
    //         'logo' => [
    //             'required',
    //         ]
    //     ];
    // }

    public function render(): string
    {
        return <<<'blade'
            <div>
                <form wire:submit.prevent="submit">
                    {{ $this->form }}
                    <button
                        type="submit"
                        class="mt-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Submit
                    </button>
                </form>
            </div>
        blade;
    }
}
