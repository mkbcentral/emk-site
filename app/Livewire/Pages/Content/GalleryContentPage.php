<?php

namespace App\Livewire\Pages\Content;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class GalleryContentPage extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $image;
    public ?Gallery $galleryToEdit;
    public $isEditing = false;
    public $filterDate = null;

    //get single gallery
    public function getGallery(Gallery $gallery)
    {
        $this->galleryToEdit = $gallery;
        $this->isEditing = true;
    }

    //upload image in gallery
    public function uploadImage()
    {
        $this->validate([
            'image' => 'required|image|max:1024', // 1MB Max
        ]);
        $imagePath = $this->image->store('galleries', 'public');
        Gallery::create([
            'image' => $imagePath,
        ]);
        $this->reset('image');
        session()->flash('message', 'Image uploaded successfully.');
    }

    //update image in gallery
    public function updateImage()
    {
        $this->validate([
            'image' => 'required|image|max:1024', // 1MB Max
        ]);
        if ($this->galleryToEdit->image) {
            Storage::disk('public')->delete($this->galleryToEdit->image);
        }
        $imagePath = $this->image->store('galleries', 'public');
        $this->galleryToEdit->update([
            'image' => $imagePath,
        ]);
        $this->reset('image', 'galleryToEdit', 'isEditing');
        session()->flash('message', 'Image updated successfully.');
    }


    //delete image from gallery
    public function deleteImage(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();
        session()->flash('message', 'Image deleted successfully.');
    }

    //reset form
    public function resetForm()
    {
        $this->reset('image', 'galleryToEdit', 'isEditing');
    }

    public function render()
    {
        return view('livewire.pages.content.gallery-content-page', [
            'galleries' => Gallery::orderBy('created_at', 'desc')
                ->when($this->filterDate, function ($query) {
                    $query->whereDate('created_at', $this->filterDate);
                })
                ->paginate(9),
        ]);
    }
}
