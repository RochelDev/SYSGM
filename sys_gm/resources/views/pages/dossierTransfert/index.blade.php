@php

    function getetape($dossier)
    {
        return $derniereEtape = $dossier->etapes()->orderByPivot('created_at', 'desc')->first();
    }

@endphp


@extends('dashboard')

@section('title', '| Dossiers')

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



    <div class="">
        <div class="mb-8">
            <div class="bg-white mx-auto p-6 dark:bg-dark-800 rounded-xl border border-gray-200 shadow-sm">
                <div class="space-y-6">
                    <div class="flex flex-col">  
                            <h1 class="text-2xl font-bold tracking-tight">Dossiers reçus</h1>
                            <p class="text-muted-foreground">
                                Consulter la liste de dossiers que vous recever.
                            </p>
                    </div>
                    <div class="space-y-6">
                        <div
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4">
                            <div class="space-y-4">
                                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                    <div class="relative w-full md:max-w-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                        <input type="search"
                                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disabled:opacity-50 md:text-sm pl-8"
                                            placeholder="Rechercher un dossier..." />
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-filter h-4 w-4">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filtres avancés
                                    </button>
                                </div>
                                <div class="rounded-md border">
                                    <div class="relative w-full overflow-auto">
                                        
                                        <table class="min-w-full divide-y divide-gray-200 caption-bottom text-sm">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Code Dossier
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Envoyeur
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Destinataire
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date de réception
                                                    </th>

                                                    

                                                        {{-- <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Structure concernée
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Provient de
                                                        </th> --}}

                                                    
                                                    
                                                    
                                                    {{-- <th scope="col"
                                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Actions
                                                    </th> --}}
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($dossiersReçus as $dossier)
                                                    @foreach ($dossier->transferts as $transfert)
                                                    <tr class="hover:bg-gray-50 transition-colors">
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $dossier->code_dossier }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->envoyeur->code_structure }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->destinataire->code_structure }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->date_transfert}}  
                                                        </td>

                                                        

                                                        {{-- <td
                                                            class="px-6 py-4 flex items-center whitespace-nowrap gap-2 justify-end text-right text-sm font-medium">
                                                            <div class="flex items-center space-x-2">


                                                                  <flux:tooltip content="Consulter" position="bottom">
                                                                    <a
                                                                      href="{{ route('dossier.transfert.showdetails', $dossier) }}"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                        <svg class="w-4 h-4" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </a>
                                                                  </flux:tooltip>
                                                                  
                                                              

                                                                                                                         </div>
                                                            
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="radix-:ro:-content-suivi" tabindex="0"
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="">
        <div class="mb-8">
            <div class="bg-white mx-auto p-6 dark:bg-dark-800 rounded-xl border border-gray-200 shadow-sm">
                <div class="space-y-6">
                    <div class="flex flex-col">  
                            <h1 class="text-2xl font-bold tracking-tight">Dossiers envoyés</h1>
                            <p class="text-muted-foreground">
                                Consulter la liste de dossiers que vous envoyer.
                            </p>
                    </div>
                    <div class="space-y-6">
                        <div
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 space-y-4">
                            <div class="space-y-4">
                                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                    <div class="relative w-full md:max-w-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                        <input type="search"
                                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base focus:ring-blue-500 focus:outline-none focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 disabled:opacity-50 md:text-sm pl-8"
                                            placeholder="Rechercher un dossier..." />
                                    </div>
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-filter h-4 w-4">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filtres avancés
                                    </button>
                                </div>
                                <div class="rounded-md border">
                                    <div class="relative w-full overflow-auto">
                                        
                                        <table class="min-w-full divide-y divide-gray-200 caption-bottom text-sm">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Code Dossier
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Envoyeur
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Destinataire
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date d'envoie
                                                    </th>

                                                    

                                                        {{-- <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Structure concernée
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Provient de
                                                        </th> --}}

                                                    
                                                    
                                                    
                                                    {{-- <th scope="col"
                                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Actions
                                                    </th> --}}
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($dossiersEnvoyés as $dossier)
                                                @foreach ($dossier->transferts as $transfert)
                                                    <tr class="hover:bg-gray-50 transition-colors">
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $dossier->code_dossier }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->envoyeur->code_structure }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->destinataire->code_structure }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">
                                                            {{ $transfert->date_transfert}}  
                                                        </td>

                                                        

                                                        {{-- <td
                                                            class="px-6 py-4 flex items-center whitespace-nowrap gap-2 justify-end text-right text-sm font-medium">
                                                            <div class="flex items-center space-x-2">


                                                                  <flux:tooltip content="Consulter" position="bottom">
                                                                    <a
                                                                      href="{{ route('dossier.transfert.showdetails', $dossier) }}"
                                                                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center transition-colors cursor-pointer">
                                                                        <svg class="w-4 h-4" fill="currentColor"
                                                                            viewBox="0 0 20 20">
                                                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </a>
                                                                  </flux:tooltip>
                                                                  
                                                              

                                                                                                                         </div>
                                                            
                                                        </td> --}}
                                                    </tr>
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" id="radix-:ro:-content-suivi" tabindex="0"
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
