<?php

namespace App\Livewire\Pages\Content;

use App\Models\CeoInfo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CeoInfoContentPage extends Component
{
    use WithFileUploads;
    //CRUD
    public $title;
    public $subtitle;
    public $description;
    public $image;
    public ?CeoInfo $ceoInfo = null;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048', // Optional image field
    ];

    public function mount()
    {
        $this->ceoInfo = CeoInfo::first();
        if ($this->ceoInfo) {
            $this->title = $this->ceoInfo->title;
            $this->subtitle = $this->ceoInfo->subtitle;
            $this->description = $this->ceoInfo->description;
            $this->image = $this->ceoInfo->image;
        }
    }

    public function save()
    {
        // Si modification, on retire la règle de validation sur l'image
        if ($this->ceoInfo) {
            $this->rules['image'] = 'nullable'; // Pas de validation d'image lors de la modification
        }

        $this->validate();

        $imagePath = $this->ceoInfo ? $this->ceoInfo->image : null;

        // Si l'utilisateur a supprimé l'image (champ image vide)
        if ($this->ceoInfo && !$this->image) {
            $imagePath = null;
        }

        // Handle image upload if a new file is provided
        if ($this->image && is_object($this->image)) {
            $imagePath = $this->image->store('about', 'public');
        }

        if ($this->ceoInfo) {
            $this->ceoInfo->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'description' => $this->description,
                'image' => $imagePath,
            ]);
        } else {
            CeoInfo::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
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
        $this->ceoInfo = null;
    }
    public function render()
    {
        return view('livewire.pages.content.ceo-info-content-page');
    }
}
