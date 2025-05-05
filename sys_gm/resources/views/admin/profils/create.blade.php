@extends('admin')

@section('title', '| Profil')

@section('content')
    <div class="">
        Enregistrer un Profil
        <form class="space-y-8" action="{{ route($profil->exists ? 'admin.profil.update' : 'admin.profil.store', $profil) }}" method="post">
            @csrf
            @method($profil->exists ? 'put' : 'post')

            <div>
                <label for="intitule_profil" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Intitulé <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="intitule_profil"
                       name="intitule_profil"
                       value="{{ old('intitule_profil', $profil->intitule_profil) }}" 
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white"
                       required>
                @error('intitule_profil')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.profil.index') }}" type="button"
                    class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    @if($profil->exists)
                        Modifier
                    @else
                        Enregistrer
                    @endif
                </button>
            </div>
        </form>
    </div>
@endsection