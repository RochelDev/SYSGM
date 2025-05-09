<div class="bg-white shadow rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <h3 class="text-lg font-medium leading-6 text-gray-900">
            Traitement de la Demande
          </h3>
          <p class="mt-1 text-sm text-gray-500">
            #{request.id} - {request.type}
          </p>
          <div class="mt-4">
            <span
              class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800"
            >
              En attente de traitement
            </span>
          </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="grid grid-cols-1 gap-6">
            <!-- Informations de base -->
            <div class="bg-gray-50 p-4 rounded-lg">
              <h4 class="text-sm font-medium text-gray-500">
                Informations
              </h4>
              <dl
                class="mt-2 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2"
              >
                <div>
                  <dt class="text-sm font-medium text-gray-500">
                    Agent
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    {request.agent}
                  </dd>
                </div>
                <div>
                  <dt class="text-sm font-medium text-gray-500">
                    Service
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    {request.department}
                  </dd>
                </div>
                <div>
                  <dt class="text-sm font-medium text-gray-500">
                    Date de soumission
                  </dt>
                  <dd class="mt-1 text-sm text-gray-900">
                    {new
                    Date(request.date).toLocaleDateString('fr-FR')}
                  </dd>
                </div>
              </dl>
            </div>

            <!-- Documents -->
            <div>
              <h4 class="text-sm font-medium text-gray-500 mb-4">
                Documents
              </h4>
              <ul
                class="divide-y divide-gray-200 border border-gray-200 rounded-md"
              >
                <li
                  class="px-4 py-3 flex items-center justify-between text-sm"
                >
                  <div class="flex items-center">
                    <FileText class="h-5 w-5 text-gray-400 mr-2" />
                    <span class="text-gray-900">{doc.name}</span>
                  </div>
                  <div class="flex space-x-2">
                    <button
                      type="button"
                      class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                    >
                      <!-- <Download class="h-4 w-4 mr-1" /> -->
                      Télécharger
                    </button>
                  </div>
                </li>
              </ul>
              <div class="mt-4">
                <label
                  class="block text-sm font-medium text-gray-700"
                >
                  Ajouter un document
                </label>
                <div
                  class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
                >
                  <div class="space-y-1 text-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="mx-auto h-12 w-12 text-gray-400"
                      >
                      <path
                        d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"
                      ></path>
                      <polyline points="17 8 12 3 7 8"></polyline>
                      <line x1="12" x2="12" y1="3" y2="15"></line>
                    </svg>
                    <!-- <Upload class="" /> -->
                    <div class="flex text-sm text-gray-600">
                      
                      <label
                        htmlFor="file-upload"
                        class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500"
                      >
                        <span>Télécharger un fichier</span>
                        <input
                          id="file-upload"
                          name="file-upload"
                          type="file"
                          class="sr-only"
                        />
                      </label>
                      <p class="pl-1">ou glisser-déposer</p>
                    </div>
                    
                    <p class="text-xs text-gray-500">
                      PDF jusqu'à 10MB
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Historique -->
            <div>
              <h4 class="text-sm font-medium text-gray-500 mb-4">
                Historique
              </h4>
              <div class="flow-root">
                <ul class="-mb-8">
                  <li>
                    <div class="relative pb-8">
                      <span
                        class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                      ></span>
                      <div class="relative flex space-x-3">
                        <div>
                          <span
                            class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white"
                          >
                            <CheckCircle class="h-5 w-5 text-white" />
                          </span>
                        </div>
                        <div
                          class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4"
                        >
                          <div>
                            <p class="text-sm text-gray-500">
                              {event.action} par
                              <span class="font-medium text-gray-900"
                                >{event.actor}</span
                              >
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                              {event.comment}
                            </p>
                          </div>
                          <div
                            class="text-right text-sm whitespace-nowrap text-gray-500"
                          >
                            {new
                            Date(event.date).toLocaleDateString('fr-FR')}
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Actions -->
            <div class="border-t border-gray-200 pt-4">
              <div class="flex flex-col space-y-4">
                <div>
                  <label
                    htmlFor="comment"
                    class="block text-sm font-medium text-gray-700"
                  >
                    Commentaire
                  </label>
                  <div class="mt-1">
                    <textarea
                      id="comment"
                      rows="3"
                      class="shadow-sm focus:ring-green-500 focus:border-green-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    ></textarea>
                  </div>
                </div>
                <div class="flex justify-end space-x-3">
                  <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                  >
                    <!-- <MessageSquare class="h-4 w-4 mr-2" /> -->
                    Demander des modifications
                  </button>
                  <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                  >
                    <!-- <XCircle class="h-4 w-4 mr-2" /> -->
                    Rejeter
                  </button>
                  <button
                    type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                  >
                    <!-- <CheckCircle class="h-4 w-4 mr-2" /> -->
                    Approuver
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>