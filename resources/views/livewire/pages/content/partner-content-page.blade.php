<div class="flex space-x-8">
    <!-- Liste des partenaires -->
    <div class="w-1/2 bg-gray-100 p-4 rounded">
        <h2 class="text-lg font-bold mb-4">Liste des partenaires</h2>
        <ul>
            @forelse ($partners as $partner)
                <li
                    class="mb-3 flex items-center justify-between bg-white rounded shadow-sm px-3 py-2 hover:bg-blue-50 transition">
                    <div class="flex items-center space-x-3">
                        @if ($partner->logo)
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="Logo {{ $partner->name }}"
                                class="h-10 w-10 object-contain rounded border border-gray-200 bg-gray-50">
                        @else
                            <div
                                class="h-10 w-10 flex items-center justify-center bg-gray-200 rounded text-gray-400 text-xs">
                                <span>—</span>
                            </div>
                        @endif
                        <span class="font-medium text-gray-800">{{ $partner->name }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button wire:click="editPartner({{ $partner }})"
                            class="px-2 py-1 text-sm rounded bg-blue-100 text-blue-700 hover:bg-blue-200 transition">Modifier</button>
                        <button wire:wire:confirm="Êtes-vous sûr de vouloir supprimer ce partenaire ?"
                            wire:click="deletePartner({{ $partner }})"
                            class="px-2 py-1 text-sm rounded bg-red-100 text-red-700 hover:bg-red-200 transition"
                            onclick="return confirm('Supprimer ce partenaire ?')">Supprimer</button>
                    </div>
                </li>
            @empty
                <li class="text-gray-500 text-sm">Aucun partenaire pour le moment.</li>
            @endforelse
        </ul>
    </div>

    <!-- Formulaire de création/modification -->
    <div class="w-1/2 bg-white p-4 rounded shadow">
        <h2 class="text-lg font-bold mb-4">
            {{ $isEditMode ? 'Modifier le partenaire' : 'Créer un partenaire' }}
        </h2>
        <form wire:submit.prevent="savePartner">
            <div class="mb-4">
                <label class="block mb-1">Nom du partenaire</label>
                <input type="text" wire:model="name" class="w-full border rounded px-3 py-2" />
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Logo du partenaire</label>
                <input type="file" wire:model="logo" class="w-full border rounded px-3 py-2" />
                @error('logo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @if ($isEditMode == true && $partnerToEdit?->logo)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $partnerToEdit->logo) }}" alt="Logo actuel" class="h-16">
                    </div>
                @elseif ($logo)
                    <div class="mt-2">
                        <img src="{{ $logo ? $logo->temporaryUrl() : asset('empty.png') }}" alt="Aperçu du logo"
                            class="h-16">
                    </div>
                @else
                    <div class="mt-2">
                        <img src="{{ asset('empty.png') }}" alt="Aperçu du logo" class="h-16">
                    </div>
                @endif
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="showLogoOnly" class="form-checkbox">
                    <span class="ml-2">Afficher uniquement le logo</span>
                </label>
                @error('showLogoOnly')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <!-- Ajoutez d'autres champs si nécessaire -->
            <div class="flex items-center space-x-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded flex items-center space-x-2">
                    <i class="fas fa-save"></i>
                    <span>{{ $isEditMode ? 'Mettre à jour' : 'Créer' }}</span>
                </button>
                @if ($isEditMode)
                    <button type="button" wire:click="resetForm"
                        class="px-4 py-2 rounded bg-gray-200 text-gray-700 hover:bg-gray-300 transition flex items-center space-x-2">
                        <i class="fas fa-times"></i>
                        <span>Annuler</span>
                    </button>
                @endif
            </div>
        </form>
    </div>
</div>
