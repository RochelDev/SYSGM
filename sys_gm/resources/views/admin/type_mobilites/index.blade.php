@extends('admin')

@section('title', '| Type Mobilité')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-3">
        <h1 class="text-2xl font-bold tracking-tight">Liste des Types de mobilité</h1>
        <a href="{{ route('admin.type_mobilite.create') }}"
           class="inline-flex bg-blue-500 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
            Nouveau type de mobilité
        </a>
    </div>

    <div class="border rounded-xl overflow-x-auto">
        <table class="min-w-full caption-bottom text-sm">
            <thead class="bg-blue-800 text-white">
            <tr class="border-b transition-colors hover:bg-muted/50">
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Intitulé
                </th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Actions
                </th>
                
            </tr>
            </thead>
            <tbody>
            @forelse ($type_mobilites as $type_mobilite)
                <tr class="border-b transition-colors hover:bg-muted/50">
                    <td class="p-2 align-middle">{{ $type_mobilite->intitule_mobilite }}</td>
                    <td class="p-2 align-middle flex justify-end gap-2">
                        <a href="{{ route('admin.type_mobilite.edit', $type_mobilite) }}"
                           class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-yellow-300 hover:bg-yellow-700 hover:text-accent-foreground h-9 rounded-md px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="h-4 w-4 mr-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                            Modifier
                        </a>
                        <form action="{{ route('admin.type_mobilite.destroy', $type_mobilite) }}" method="post">
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
                    <td colspan="4" class="p-4 text-center text-gray-500 dark:text-gray-400">Aucune structure enregistrée.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="px-6 py-4 flex items-center justify-end">
            {{ $type_mobilites->links() }}
        </div>
    </div>
@endsection