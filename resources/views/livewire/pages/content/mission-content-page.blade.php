<div>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Mission</h1>
            <p class="text-gray-600" id="currentDate">Chargement de la date...</p>
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
    <form wire:submit="save">
        <div class="w-full">
            <label for="imageUpload" class="cursor-pointer block group">
                <div
                    class="relative rounded-xl overflow-hidden shadow-lg border-4 transition-all duration-300
                {{ $errors->has('image') ? 'border-red-500' : 'border-transparent group-hover:border-blue-400' }}">
                    @if ($mission?->image != null)
                        <img src="{{ asset('storage/' . $mission?->image) }}" alt="A propos"
                            class="w-full h-72 object-cover group-hover:scale-105 group-hover:blur-[2px] transition-all duration-300">
                    @else
                        <img src="{{ $image ? $image->temporaryUrl() : asset('empty.png') }}" alt="A propos"
                            class="w-full h-72 object-cover group-hover:scale-105 group-hover:blur-[2px] transition-all duration-300">
                    @endif
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 bg-black/40 transition-opacity duration-300">
                        <span class="text-white text-lg font-semibold">Changer l'image</span>
                    </div>
                </div>
                <input wire:model='image' id="imageUpload" type="file" accept="image/*" class="hidden">
            </label>
            @error('image')
                <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-8 mx-auto bg-white p-6 rounded-xl shadow-lg border border-gray-100">
            <div>
                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Titre</label>
                <input type="text" id="title" wire:model="title"
                    class="block w-full rounded-lg border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none py-2 px-4 text-gray-900 placeholder-gray-400 transition"
                    placeholder="Entrez le titre">
                @error('title')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-2">
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <textarea id="description" wire:model="description" rows="10"
                    class="block w-full rounded-lg border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none py-2 px-4 text-gray-900 placeholder-gray-400 transition resize-none h-32"
                    placeholder="Entrez la description"></textarea>
                @error('description')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4 flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow transition"
                    wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="save">Enregistrer</span>
                    <span wire:loading wire:target="save">
                        <svg class="animate-spin h-5 w-5 inline-block mr-2 text-white"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                        Enregistrement...
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>
