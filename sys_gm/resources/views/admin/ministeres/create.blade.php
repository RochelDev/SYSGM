@extends('admin')

@section('title', '| Ministère')

@section('content')
    <div class="">
        Enregistrer un Ministère
        <form class="space-y-8" action="{{ route($ministere->exists ? 'admin.ministere.update':'admin.ministere.store', $ministere) }}" method="post">
            @csrf
            @method($ministere->exists? 'put':'post')

            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nom du ministère <span class="text-red-500">*</span>
                </label>
                <input type="text" value="{{ $ministere->nom_ministere }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Code du ministère <span class="text-red-500">*</span>
                    </label>
                    <input type="text" value="{{ $ministere->code_ministere  }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Sites ou localisation <span class="text-red-500">*</span>
                    </label>
                    <input type="text" value="{{ $ministere->code_ministere  }}" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 dark:bg-dark-700 dark:text-white">
                </div>
            </div>


            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.ministere.index') }}" type="button"
                    class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                    Abandonner
                </a>
                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                    @if($ministere->exists)
                        Modifier
                    @else
                        Enregistrer
                    @endif
                </button>
            </div>
        </form>
    </div>

    <div class="mt-10 border rounded-xl overflow-x-auto">
        <div class="flex justify-between items-center mb-3 p-4 bg-gray-100 dark:bg-gray-800 rounded-t-xl">
            <h2 class="text-xl font-semibold tracking-tight text-gray-700 dark:text-gray-300">Structures du Ministère</h2>
            <a href="{{ route('admin.structure.create', $ministere) }}"
               class="inline-flex bg-green-500 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 px-3 py-1.5 gap-2 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Nouvelle Structure
            </a>
        </div>
        <table class="min-w-full caption-bottom text-sm">
            <thead class="bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
            <tr class="border-b transition-colors hover:bg-muted/50">
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Nom de la Structure
                </th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Code de la Structure
                </th>
                <th class="h-12 px-4 align-middle font-medium text-muted-foreground text-right">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($ministere->structures as $structure)
                <tr class="border-b transition-colors hover:bg-muted/50">
                    <td class="p-2 align-middle">{{ $structure->nom_structure }}</td>
                    <td class="p-2 align-middle">{{ $structure->code_structure }}</td>
                    <td class="p-2 align-middle flex justify-end gap-2">
                        <a href="{{ route('admin.structure.edit', $structure) }}"
                           class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-yellow-300 hover:bg-yellow-700 hover:text-accent-foreground h-9 rounded-md px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="h-4 w-4 mr-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                            Modifier
                        </a>
                        <form action="{{ route('admin.structure.destroy', $structure) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-red-400 hover:bg-red-500 hover:text-accent-foreground h-9 rounded-md px-3"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette structure ?')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center text-gray-500 dark:text-gray-400">Aucune structure enregistrée pour ce ministère.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    
@endsection
