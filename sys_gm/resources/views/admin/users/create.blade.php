@extends('admin')

@section('title', '| Créer un utilisateur')

@section('content')
    <div class="">
        Enregistrer un nouvel utilisateur
        <form class="space-y-8" action="{{ route('admin.user.store') }}" method="post">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nom <span class="text-red-500">*</span>
                </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('name') border-red-500 @enderror">
                @error('name')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('email') border-red-500 @enderror">
                @error('email')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

                <div>
                    <label for="structure_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Structure <span class="text-red-500">*</span>
                    </label>
                    <select id="structure_id" name="structure_id"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('structure_id') border-red-500 @enderror">
                        <option value="">-- Choisir une Structure --</option>
                        @foreach ($structures as $struct)
                            <option value="{{ $struct->id }}" @if(old('structure_id', $user->structure_id) == $struct->id) selected @endif>{{ $struct->nom_structure }}</option>
                        @endforeach
                    </select>
                    @error('structure_id')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Mot de passe <span class="text-red-500">*</span>
                </label>
                <input type="password" id="password" name="password"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('password') border-red-500 @enderror">
                @error('password')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Confirmation du mot de passe <span class="text-red-500">*</span>
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Assigner des profils
                </label>
                <div class="space-y-2">
                    @forelse ($profils as $profil)
                        <div class="flex items-center">
                            <input id="profil_{{ $profil->id }}" type="checkbox" name="profils[]" value="{{ $profil->id }}"
                                   class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="profil_{{ $profil->id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ $profil->intitule_profil }}
                            </label>
                        </div>
                    @empty
                        <span class="text-gray-500">Aucun type de profil enregistré</span>
                    @endforelse

                    
                </div>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.user.index') }}" type="button"
                   class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
@endsection
