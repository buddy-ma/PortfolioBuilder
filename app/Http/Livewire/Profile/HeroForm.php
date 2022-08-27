<?php

namespace App\Http\Livewire\Profile;

use App\Models\Hero;
use App\Models\User;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class HeroForm extends Component implements HasForms
{
    use InteractsWithForms;

    public null|string $title = null;
    public null|string $description = null;
    public null|string $button = null;
    public $image;

    public function mount(User $user): void
    {
        $this->hero = $user->profile->hero;
        if(isset($this->hero)){
            $this->idd = $this->hero->id;
            $this->title = $this->hero->title;
            $this->description = $this->hero->description;
            $this->button = $this->hero->button;
        }
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            MarkdownEditor::make('description')->required(),
            TextInput::make('button')->required(),
            FileUpload::make('image')->image(),
        ];
    }

    public function submit(): void
    {
        if(isset($this->image)){
            $key = array_key_first($this->image);
            $imageName = $this->image[$key]->getFileName();   
        }

        $this->validate();
        $hero = Hero::where('profile_id', $this->idd)->first();
        $hero->title = $this->title;
        $hero->description = $this->description;
        $hero->button = $this->button;
        if(isset($this->image)){
            $hero->image = $imageName;
        }
        $hero->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Saved succesfully!',
        ]);
    }

    protected function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'image' => [
                'required',
            ],
        ];
    }

    public function render(): string
    {
        return <<<'blade'
            <div>
                <form wire:submit.prevent="submit">
                    {{ $this->form }}
                    <button
                        type="submit"
                        class="mt-5 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </form>
            </div>
        blade;
    }
}
