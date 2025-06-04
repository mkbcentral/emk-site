<?php

namespace App\Livewire\Pages\Content;

use App\Models\Service;
use Livewire\Component;

class ServiceContentPage extends Component
{
    //CRUD operations for services
    public $name;
    public $description;
    public ?Service $service;
    public bool $isEditMode = false;
    public string $formHeader = 'Ajouter un service';

    public function editService(Service $service): void
    {
        $this->service = $service;
        $this->name = $service->name;
        $this->description = $service->description;
        $this->isEditMode = true;
        $this->formHeader = 'Modifier un service';
    }
    public function saveService(): void
    {
        //validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        if ($this->isEditMode) {
            $this->service->update([
                'name' => $this->name,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Service updated successfully.');
        } else {
            Service::create([
                'name' => $this->name,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Service created successfully.');
        }
        // Reset the form
        $this->formHeader = 'Ajouter un service';
        $this->reset(['name', 'description', 'service', 'isEditMode']);
    }
    //deleteService
    public function deleteService(Service $service): void
    {
        $service->delete();
        session()->flash('message', 'Service deleted successfully.');
    }

    public function render()
    {
        return view('livewire.pages.content.service-content-page', [
            'services' => Service::all(),
        ]);
    }
}
