<div>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 w-full">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Notre Galerie</h1>
            <p class="text-gray-600" id="currentDate">Chargement de la date...</p>
        </div>
        <div class="mt-4 md:mt-0">
            <label for="filterDate" class="block text-sm font-medium text-gray-700 mb-1">
                Filtrer par date de publication</label>
            <input wire:model.live="filterDate" type="date" id="filterDate"
                class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
    </div>
    @if (session()->has('message'))
        <div class="mb-4 w-full">
            <div x-data="{ show: true }" x-show="show"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center justify-between"
                role="alert">
                <span class="block sm:inline">{{ session('message') }}</span>
                <button type="button" class="ml-4 text-green-700 hover:text-green-900 focus:outline-none"
                    @click="show = false" aria-label="Fermer">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="w-full flex flex-col md:flex-row items-center gap-4">
        <label for="imageUpload" class="cursor-pointer block group w-72 md:w-96">
            <div
                class="relative rounded-lg overflow-hidden shadow border-2 transition-all duration-300
                {{ $errors->has('image') ? 'border-red-500' : 'border-gray-200 group-hover:border-blue-400' }}">
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" alt="A propos"
                        class="w-full h-52 md:h-64 object-cover group-hover:scale-105 group-hover:blur-[2px] transition-all duration-300">
                @elseif ($galleryToEdit?->image && $isEditing == true)
                    <img src="{{ asset('storage/' . $galleryToEdit->image) }}" alt="A propos"
                        class="w-full h-52 md:h-64 object-cover group-hover:scale-105 group-hover:blur-[2px] transition-all duration-300">
                @else
                    <img src="{{ asset('empty.png') }}" alt="A propos"
                        class="w-full h-52 md:h-64 object-cover group-hover:scale-105 group-hover:blur-[2px] transition-all duration-300">
                @endif
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/40 transition-opacity duration-300">
                    <span class="text-white text-sm font-semibold">Changer l'image</span>
                </div>
            </div>
            <input wire:model='image' id="imageUpload" type="file" accept="image/*" class="hidden">
            @if ($galleryToEdit == null)
                <button type="button" wire:click="uploadImage"
                    class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition">
                    Publier dans la galerie
                </button>
            @else
                <button type="button" wire:click="updateImage()"
                    class="mt-3 w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded-lg shadow transition flex items-center justify-center gap-2">
                    <i class="fas fa-pen mr-1"></i>
                    Modifier l'image
                </button>

                <button type="button" wire:click="resetForm()"
                    class="mt-2 w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded-lg shadow transition flex items-center justify-center gap-2">
                    <i class="fas fa-times mr-1"></i>
                    Annuler
                </button>
            @endif

            @error('image')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
            @enderror
        </label>
        <div class="flex-1 w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @forelse ($galleries as $gallery)
                <div class="relative group rounded-lg overflow-hidden shadow border border-gray-200">
                    <img src="{{ Storage::url($gallery->image) }}" alt="Image galerie"
                        class="w-full h-40 object-cover group-hover:scale-105 transition-all duration-300">
                    <div
                        class="absolute inset-0 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 bg-black/40 transition-opacity duration-300">
                        <button wire:click="getGallery({{ $gallery->id }})"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded shadow text-xs font-semibold flex items-center gap-1">
                            <i class="fas fa-edit"></i>
                            Modifier
                        </button>
                        <button wire:confirm="Êtes-vous sûr de vouloir supprimer cette image ?"
                            wire:click="deleteImage({{ $gallery->id }})"
                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded shadow text-xs font-semibold flex items-center gap-1">
                            <i class="fas fa-trash-alt"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500 py-8">
                    Aucune image dans la galerie.
                </div>
            @endforelse

        </div>

    </div>
    <div class="w-full mt-6 flex justify-center">
        {{ $galleries->links() }}
    </div>
</div>
