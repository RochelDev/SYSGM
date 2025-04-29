<div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Demandes de mobilité</h1>
        <p class="text-gray-600">Gérez toutes les demandes de mobilité des agents.</p>
    </div>
    <div class="mt-4 md:mt-0">
        <a class="btn p-2 rounded-lg bg-blue-900 inline-flex items-center text-white" href="/requests/new">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus mr-2">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <line x1="19" x2="19" y1="8" y2="14"></line>
                <line x1="22" x2="16" y1="11" y2="11"></line>
            </svg>Nouvelle demande
        </a>
    </div>
</div>


<div class="card mb-6">
    <div class="p-4 border-b border-gray-100">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
            <div class="relative w-full lg:max-w-md mb-4 lg:mb-0">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search text-gray-400">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </div>
                <input type="text" class="input-field pl-10" placeholder="Rechercher un agent ou une demande..." value="">
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-filter text-gray-500 mr-2">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    <select class="input-field">
                        <option value="all">Tous les statuts</option>
                        <option value="pending">En attente</option>
                        <option value="processing">En traitement</option>
                        <option value="approved">Approuvée</option>
                        <option value="rejected">Rejetée</option>
                        <option value="completed">Complétée</option>
                    </select>
                </div>
                <div>
                    <select class="input-field">
                        <option value="all">Tous les types</option>
                        <option value="Mutation">Mutation</option>
                        <option value="Détachement">Détachement</option>
                        <option value="Affectation">Affectation</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Demande</th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Agent</th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">Destination</th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th><th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th></tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#0F2C59]">#1001</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Kofi Amoah</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Mutation</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 hidden lg:table-cell">Direction du Budget</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15/03/2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 ">Approuvée</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a class="text-[#0F2C59] hover:text-[#4CB9E7] mr-4" href="/requests/1001">Voir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
        <p class="text-sm text-gray-600">Affichage de <span class="font-medium">5</span> demandes</p>
        <div class="flex items-center space-x-2">
            <button class="p-2 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left "><path d="m15 18-6-6 6-6"></path></svg>
            </button>
            <span class="text-sm text-gray-600">Page 1</span>
            <button class="p-2 rounded-md border border-gray-300 text-gray-600 hover:bg-gray-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right "><path d="m9 18 6-6-6-6"></path></svg>
            </button>
        </div>
    </div>
</div>