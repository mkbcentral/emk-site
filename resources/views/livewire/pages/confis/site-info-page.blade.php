<div class="">
    <form class="" wire:submit="saveOrUpdate">
        <div class="bg-gray-50 p-6 rounded-lg">
            @if (session()->has('message'))
                <div class="mb-6">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex items-center"
                        role="alert">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="block">{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="mr-4">
                        @if ($siteInfo->logo)
                            <img id="" class="h-16 w-16 rounded-full object-cover"
                                src="{{ 'storage/' . $siteInfo->logo }}" wire:target="logo">
                        @else
                            <img id="" class="h-16 w-16 rounded-full object-cover"
                                src="{{ $logo ? $logo->temporaryUrl() : asset('empty.png') }}" wire:loading.remove
                                wire:target="logo">
                        @endif

                    </div>
                    <div>
                        <div class="flex space-x-2">
                            <label
                                class="bg-white border border-gray-300 text-gray-700 px-3 py-1.5 rounded text-sm cursor-pointer">
                                Choisir
                                <input type="file" accept="image/*" class="hidden" wire:model="logo" id="site_logo">
                            </label>
                            @if ($siteInfo)
                                <button type="button" wire:click="updateLogo"
                                    class="border border-gray-300 text-gray-700 px-3 py-1.5 rounded text-sm">Modifier</button>
                            @endif
                        </div>
                        <p class="text-xs text-gray-500 mt-1">JPG, GIF ou PNG. Taille max. 1MB</p>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Enregistrer
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom du site</label>
                    <input type="text" id="name" wire:model="name"
                        class="w-full border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('name') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}">
                    @error('name')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description du
                        site</label>
                    <textarea id="description" wire:model="description"
                        class="w-full border {{ $errors->has('description') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('description') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}"
                        rows="2"></textarea>
                    @error('description')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone du site</label>
                    <input type="text" id="phone" wire:model="phone"
                        class="w-full border {{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('phone') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}">
                    @error('phone')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <label for="other_phone" class="block text-sm font-medium text-gray-700 mb-1">Autre
                        téléphone</label>
                    <input type="text" id="other_phone" wire:model="other_phone"
                        class="w-full border {{ $errors->has('other_phone') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('other_phone') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}">
                    @error('other_phone')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email du
                        site</label>
                    <input type="text" id="email" wire:model="email"
                        class="w-full border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('email') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}">
                    @error('email')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="other_email" class="block text-sm font-medium text-gray-700 mb-1">Autre email du
                        site</label>
                    <input type="text" id="other_email" wire:model="other_email"
                        class="w-full border {{ $errors->has('other_email') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('other_email') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}">
                    @error('other_email')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 mb-6">
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                    <textarea id="address" wire:model="address"
                        class="w-full border {{ $errors->has('address') ? 'border-red-500' : 'border-gray-300' }} rounded-md px-3 py-2 focus:outline-none focus:ring-2 {{ $errors->has('address') ? 'focus:ring-red-500' : 'focus:ring-blue-500' }}"
                        rows="2"></textarea>
                    @error('address')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </form>
</div>
