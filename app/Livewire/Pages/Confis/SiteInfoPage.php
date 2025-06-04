<?php

namespace App\Livewire\Pages\Confis;

use App\Models\WebSiteInfo;
use Livewire\Component;
use Livewire\WithFileUploads;

class SiteInfoPage extends Component
{
    use WithFileUploads;
    //CRUD with WebSiteInfo model
    public $name;
    public $description;
    public $phone;
    public $other_phone;
    public $email;
    public $other_email;
    public $address;
    public $logo;
    public $siteInfo;


    public function mount()
    {
        $this->siteInfo = WebSiteInfo::first();
        if ($this->siteInfo) {
            $this->fill($this->siteInfo->only([
                'name',
                'description',
                'phone',
                'other_phone',
                'email',
                'other_email',
                'address',
                'logo'
            ]));
        }
    }

    public function saveOrUpdate()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'phone' => 'required|string|max:20',
            'other_phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'other_email' => 'nullable|email|max:255',
            'address' => 'required|string|max:500',
            'logo' => 'nullable|image|max:2048',
        ]);

        // Handle logo upload if a new file is provided (Livewire compatible)
        if ($this->logo) {
            $validated['logo'] = $this->logo->store('logos', 'public');
        } elseif ($this->siteInfo) {
            $validated['logo'] = $this->siteInfo->logo;
        } else {
            $validated['logo'] = null;
        }

        if ($this->siteInfo) {
            $this->siteInfo->update($validated);
        } else {
            $this->siteInfo = WebSiteInfo::create($validated);
        }

        session()->flash('message', __('Site information saved successfully.'));
    }

    public function updateLogo()
    {
        $validated = $this->validate([
            'logo' => 'required|image|max:2048',
        ]);
        if ($this->siteInfo) {
            $path = $this->logo->store('logos', 'public');
            $this->siteInfo->update(['logo' => $path]);
            $this->logo = $path;
            session()->flash('message', __('Logo updated successfully.'));
        } else {
            session()->flash('error', __('No site information found to update the logo.'));
        }
    }
    // Render the Livewire component


    public function render()
    {
        return view('livewire.pages.confis.site-info-page');
    }
}
