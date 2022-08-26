<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Template;
use Livewire\WithFileUploads;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class AddTemplate extends Component implements HasForms
{
    use InteractsWithForms;
    use WithFileUploads;

    public $title, $blade, $description, $image, $premium;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            TextInput::make('blade')->required(),
            MarkdownEditor::make('description'),
            FileUpload::make('image')->image(),
            Toggle::make('premium')->onIcon('heroicon-s-currency-dollar')->offIcon('heroicon-s-gift')
        ];
    }

    public function submit()
    {
        $this->validate();

        $key = array_key_first($this->image);
        $imageName = $this->image[$key]->getFileName();
        $template = new Template();
        $template->title = $this->title;
        $template->blade = $this->blade;
        $template->description = $this->description;
        $template->image = $imageName;
        $template->premium = $this->premium ? 1 : 0;

        $template->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Template Saved succesfully!',
        ]);

        $this->emptyVal();
        $this->redirect('/profile/templates');
    }

    public function emptyVal()
    {
        $this->title = '';
        $this->blade = '';
        $this->description = '';
        $this->image = '';
    }

    protected function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
            ],
            'blade' => [
                'required',
                'string',
            ],
            'image' => [
                'required',
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.add-template');
    }
}
