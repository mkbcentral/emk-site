<div>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">Services</h1>
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
    <div class="flex flex-col md:flex-row gap-6">

        <!-- Service Table -->
        <div class="flex-1">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-6">
                <div>
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Liste des services</h2>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($services as $service)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $service->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ Str::limit($service->description, 50, '...') }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <button wire:click="editService({{ $service->id }})"
                                                class="text-indigo-600 hover:text-indigo-900 border border-indigo-200 rounded p-1 transition cursor-pointer"
                                                title="Modifier">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button wire:confirm="Êtes-vous sûr de vouloir supprimer ce service ?"
                                                wire:click="deleteService({{ $service->id }})"
                                                class="text-red-600 hover:text-red-900 border border-red-200 rounded p-1 transition cursor-pointer"
                                                title="Supprimer">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Service Form à droite -->
        <div class="w-full md:w-1/3">
            <!-- Service Form -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <!-- Placez ici votre formulaire de service -->
                <h2 class="text-lg font-semibold text-gray-800 mb-4">{{ $formHeader }}</h2>
                <!-- Exemple de formulaire -->
                <form wire:submit="saveService" class="space-y-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="serviceName">
                            Nom du service
                        </label>
                        <input id="serviceName" name="serviceName" type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                            placeholder="Nom du service" wire:model="name">
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="serviceDescription">
                            Description
                        </label>
                        <textarea id="serviceDescription" name="serviceDescription"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                            placeholder="Description" rows="5" wire:model="description"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
