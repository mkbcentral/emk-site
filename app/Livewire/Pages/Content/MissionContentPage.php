<?php

namespace App\Livewire\Pages\Content;

use App\Models\Mission;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class MissionContentPage extends Component
{
    use WithFileUploads;
    //CRUD
    public $title;
    public $description;
    public $image;
    public $imagePath;
    public ?Mission $mission = null;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048', // Optional image field
    ];

    public function mount()
    {
        $this->mission = Mission::first();
        if ($this->mission) {
            $this->title = $this->mission->title;
            $this->description = $this->mission->description;
            $this->imagePath = $this->mission->image;
        }
    }

    public function save()
    {
        // Si modification, on retire la règle de validation sur l'image
        if ($this->mission) {
            $this->rules['image'] = 'nullable'; // Pas de validation d'image lors de la modification
        }

        $this->validate();

        $imagePath = $this->mission ? $this->mission->image : null;

        // Si l'utilisateur a supprimé l'image (champ image vide)
        if ($this->mission && !$this->image) {
            $imagePath = null;
        }

        // Handle image upload if a new file is provided
        if ($this->image && is_object($this->image)) {
            $imagePath = $this->image->store('mission', 'public');
        }

        if ($this->mission) {
            $this->mission->update([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath,
            ]);
        } else {
            Mission::create([
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
        $this->mission = null;
    }
    public function render()
    {
        return view('livewire.pages.content.mission-content-page');
    }
}
