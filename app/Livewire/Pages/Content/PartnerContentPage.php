<?php

namespace App\Livewire\Pages\Content;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class PartnerContentPage extends Component
{
    use WithFileUploads;
    public $name;
    public $logo;
    public $showLogoOnly = false;
    public ?Partner $partnerToEdit = null;
    public bool $isEditMode = false;
    public string $formHeader = 'Ajouter un partenaire';


    //get single partner for edit
    public function editPartner(Partner $partner): void
    {
        $this->partnerToEdit = $partner;
        $this->name = $partner->name;
        $this->logo = $partner->logo;
        $this->showLogoOnly = $partner->show_logo_only;
        $this->isEditMode = true;
        $this->formHeader = 'Modifier un partenaire';
    }

    //save partner
    public function savePartner(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'showLogoOnly' => 'boolean',
        ]);

        if ($this->isEditMode) {

            $this->partnerToEdit->update([
                'name' => $this->name,
                'logo' => $this->logo ? $this->logo->store('partners', 'public') : $this->partnerToEdit->logo,
                'show_logo_only' => $this->showLogoOnly,
            ]);
            session()->flash('message', 'Partenaire mis à jour avec succès.');
        } else {
            Partner::create([
                'name' => $this->name,
                'logo' => $this->logo ? $this->logo->store('partners', 'public') : null,
                'show_logo_only' => $this->showLogoOnly,
            ]);
            session()->flash('message', 'Partenaire créé avec succès.');
        }

        // Reset the form
        $this->formHeader = 'Ajouter un partenaire';
        $this->reset(['name', 'logo', 'showLogoOnly', 'partnerToEdit', 'isEditMode']);
    }
    //delete partner
    public function deletePartner(Partner $partner): void
    {
        $partner->delete();
        session()->flash('message', 'Partenaire supprimé avec succès.');
    }

    //Reset form
    public function resetForm(): void
    {
        $this->reset(['name', 'logo', 'showLogoOnly', 'partnerToEdit', 'isEditMode']);
        $this->formHeader = 'Ajouter un partenaire';
    }
    public function render()
    {
        return view('livewire.pages.content.partner-content-page', [
            'partners' => Partner::all(),
        ]);
    }
}
