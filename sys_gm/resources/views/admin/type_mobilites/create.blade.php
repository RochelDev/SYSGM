@extends('admin')

@section('title', '| Type Mobilité')

@section('content')
<div class="">
    Enregistrer un Type de mobilité
    <form class="space-y-8" action="{{ route($type_mobilite->exists ? 'admin.type_mobilite.update':'admin.type_mobilite.store', $type_mobilite) }}" method="post">
        @csrf
        @method($type_mobilite->exists? 'put':'post')

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Intitulé <span class="text-red-500">*</span>
            </label>
            <input type="text" value="{{ $type_mobilite->intitule_mobilite  }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Code <span class="text-red-500">*</span>
            </label>
            <input type="text" value="{{ $type_mobilite->code_type  }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
        </div>


        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.type_mobilite.index') }}" type="button"
                class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                Abandonner
            </a>
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                @if($type_mobilite->exists)
                    Modifier
                @else
                    Enregistrer
                @endif
            </button>
        </div>
    </form>
</div>

@endsection