@extends('admin')

@section('title', '| Agent')

@section('content')
    @if(session('success'))
        {{-- <div class="alert alert-success">
        {{ session('success') }}
        </div> --}}
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Success alert!</span> {{ session('success') }}
            </div>
        </div>
    @endif


    <div class="flex justify-between items-center mb-3">
        <h1 class="text-2xl font-bold tracking-tight">Listes de tous les agents</h1>
        <a href="{{ route('agent.create') }}"
           class="inline-flex bg-blue-500 items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
            Nouvel agent
        </a>
    </div>

    <div class="border rounded-xl overflow-x-auto">
        <table class="min-w-full caption-bottom text-sm">
            <thead class="bg-blue-800 text-white">
            <tr class="border-b transition-colors hover:bg-muted/50">
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Matricule
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Numéro NPI
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Nom
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Prénom
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Grade
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Catégorie
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Historique Poste
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Date Recrutement
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Date Début Service
                </th>
                <th
                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Compte
                </th>
                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                    Ministère actuel
                </th>
                <th
                    class="h-12 px-4 align-middle font-medium text-muted-foreground text-right">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($agents as $agent)
                <tr class="border-b transition-colors hover:bg-muted/50">
                    <td class="py-2 px-4 align-middle ">{{ $agent->matricule }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->num_NPI }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->nom }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->prenom }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->grade }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->categorie }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->historique_poste }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->date_recrutement }}</td>
                    <td class="py-2 px-4 align-middle ">{{ $agent->date_debut_service }}</td>
                    <td class="py-2 px-4 align-middle ">@if (isset($agent->user->exists)) oui @else non @endif</td>
                    <td class="py-2 px-4 align-middle">{{ $agent->ministere ? $agent->ministere->code_ministere : 'Aucun' }}</td>
                    <td class="py-2 px-4 align-middle flex justify-end gap-2">
                        {{-- <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-yellow-300 hover:bg-yellow-700 hover:text-accent-foreground h-9 rounded-md px-3"
                           type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="h-4 w-4 mr-1">
                                <path
                                    d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                </path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                            Voir
                        </a> --}}

                        <a href="{{ route('agent.edit', $agent) }}"
                           class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-yellow-300 hover:bg-yellow-700 hover:text-accent-foreground h-9 rounded-md px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="h-4 w-4 mr-1">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                            Modifier
                        </a>

                        <form action="{{ route('agent.destroy', $agent)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium border border-red-400 hover:bg-red-500 hover:text-accent-foreground h-9 rounded-md px-3"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet agent ?')"> Supprimer </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="px-6 py-4 flex items-center justify-end">
            {{$agents->links()}}
        </div>
    </div>


@endsection