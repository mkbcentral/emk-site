<?php

namespace App\Livewire\Pages\Content;

use App\Models\About;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutContentPage extends Component
{
    use WithFileUploads;
    //CRUD
    public $title;
    public $description;
    public $image;
    public ?About $about = null;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048', // Optional image field
    ];

    public function mount()
    {
        $this->about = About::first();
        if ($this->about) {
            $this->title = $this->about->title;
            $this->description = $this->about->description;
            $this->image = $this->about->image;
        }
    }

    public function save()
    {
        // Si modification, on retire la règle de validation sur l'image
        if ($this->about) {
            $this->rules['image'] = 'nullable'; // Pas de validation d'image lors de la modification
        }

        $this->validate();

        $imagePath = $this->about ? $this->about->image : null;

        // Si l'utilisateur a supprimé l'image (champ image vide)
        if ($this->about && !$this->image) {
            $imagePath = null;
        }

        // Handle image upload if a new file is provided
        if ($this->image && is_object($this->image)) {
            $imagePath = $this->image->store('about', 'public');
        }

        if ($this->about) {
            $this->about->update([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath,
            ]);
        } else {
            About::create([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath,
            ]);
        }

        session()->flash('message', 'About content saved successfully.');
    }
    public function resetFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image = null;
        $this->about = null;
    }

    public function render()
    {
        return view('livewire.pages.content.about-content-page');
    }
}
