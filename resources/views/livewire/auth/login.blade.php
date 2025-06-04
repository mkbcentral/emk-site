<div class="flex flex-col gap-6">
    <form class="mt-6 space-y-5" wire:submit="login">
        @if ($errors->any())
            <div class="mb-4">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Erreur :</strong>
                    <ul class="list-disc pl-5 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="email-address" class="sr-only">Adresse email</label>
                <input id="email-address" wire:model="email" type="email" autocomplete="email" required
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                    placeholder="Adresse email">
            </div>
            <div>
                <label for="password" class="sr-only">Mot de passe</label>
                <input id="password" wire:model="password" type="password" autocomplete="current-password" required
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm"
                    placeholder="Mot de passe">
            </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember-me" wire:model="remember" type="checkbox"
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                    Se souvenir de moi
                </label>
            </div>
        </div>
        <div>
            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                wire:loading.attr="disabled">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <i class="fas fa-lock text-blue-500 group-hover:text-blue-400"></i>
                </span>
                <span wire:loading.remove>
                    Se connecter
                </span>
                <span wire:loading>
                    Connexion en cours...
                </span>
            </button>
        </div>
    </form>
</div>
