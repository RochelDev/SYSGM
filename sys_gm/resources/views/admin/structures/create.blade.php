@extends('admin')

@section('title', '| Structure')

@section('content')
    <div class="">
        @if(isset($ministere))
            {{ $structure->exists ? 'Modifier' : 'Enregistrer' }} une Structure pour le Ministère : <span class="font-semibold">{{ $ministere->nom_ministere }}</span>
        @else
            {{ $structure->exists ? 'Modifier' : 'Enregistrer' }} une Structure
        @endif

        <form class="space-y-8 mt-4" action="{{ route($structure->exists ? 'admin.structures.update':'admin.structures.store', $structure) }}" method="post">
            @csrf
            @method($structure->exists ? 'put' : 'post')

            @if(!isset($ministere))
                <div>
                    <label for="ministere_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Ministère <span class="text-red-500">*</span>
                    </label>
                    <select id="ministere_id" name="ministere_id"
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('ministere_id') border-red-500 @enderror">
                        <option value="">-- Choisir un Ministère --</option>
                        @foreach ($ministeres as $minist)
                            <option value="{{ $minist->id }}" @if(old('ministere_id', $structure->ministere_id) == $minist->id) selected @endif>{{ $minist->nom_ministere }}</option>
                        @endforeach
                    </select>
                    @error('ministere_id')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            @else
                <input type="hidden" name="ministere_id" value="{{ $ministere->id }}">
            @endif

            <div>
                <label for="nom_structure" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nom de la Structure <span class="text-red-500">*</span>
                </label>
                <input type="text" id="nom_structure" name="nom_structure" value="{{ old('nom_structure', $structure->nom_structure) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('nom_structure') border-red-500 @enderror">
                @error('nom_structure')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="code_structure" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Code de la Structure <span class="text-red-500">*</span>
                </label>
                <input type="text" id="code_structure" name="code_structure" value="{{ old('code_structure', $structure->code_structure) }}"
                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white @error('code_structure') border-red-500 @enderror">
                @error('code_structure')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ isset($ministere) ? route('admin.ministere.edit', $ministere) : route('admin.structure.index') }}" type="button"
                   class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    @if($structure->exists)
                        Modifier
                    @else
                        Enregistrer
                    @endif
                </button>
            </div>
        </form>
    </div>
@endsection