<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind css</title>

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('web.shared.header')

    <!-- Services Content -->
    <div class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
          <h1 class="text-3xl font-bold mb-6 text-center">Nos Services</h1>

          <p class="text-gray-700 mb-10 text-center">
            Découvrez l'ensemble des services proposés par la plateforme Sys_gm pour gérer votre carrière
            et votre mobilité au sein de l'administration publique béninoise.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="p-6 border-t-4 border-primary rounded-lg bg-white shadow-md">
              <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Demande de Mutation</h3>
              <p class="text-gray-600 mb-4">
                Soumettez et suivez votre demande de mutation vers un autre service de l'administration.
                Consultez les postes disponibles et les prérequis.
              </p>
              <ul class="space-y-2 mb-6">
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Formulaire de demande en ligne</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Suivi de votre demande en temps réel</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Consultez les postes vacants</span>
                </li>
              </ul>
              <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md text-sm font-medium">
                Déposer une demande
              </button>
            </div>

            <div class="p-6 border-t-4 border-primary rounded-lg bg-white shadow-md">
              <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Demande de Détachement</h3>
              <p class="text-gray-600 mb-4">
                Initiez et suivez votre procédure de détachement vers une autre structure.
                Consultez les informations sur les droits et obligations.
              </p>
              <ul class="space-y-2 mb-6">
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Formulaire de demande dématérialisé</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Notifications à chaque étape</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Documentation juridique à jour</span>
                </li>
              </ul>
              <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md text-sm font-medium">
                Déposer une demande
              </button>
            </div>

            <div class="p-6 border-t-4 border-primary rounded-lg bg-white shadow-md">
              <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Mise à Disposition</h3>
              <p class="text-gray-600 mb-4">
                Gérez votre demande de mise à disposition auprès d'une autre administration
                tout en gardant votre lien avec votre structure d'origine.
              </p>
              <ul class="space-y-2 mb-6">
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Procédure simplifiée</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Liaison avec les deux administrations</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Suivi du statut de votre demande</span>
                </li>
              </ul>
              <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md text-sm font-medium">
                Déposer une demande
              </button>
            </div>

            <div class="p-6 border-t-4 border-primary rounded-lg bg-white shadow-md">
              <div class="mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <h3 class="text-xl font-semibold mb-3">Recherche d'Opportunités</h3>
              <p class="text-gray-600 mb-4">
                Consultez les opportunités de mobilité disponibles dans la fonction publique
                béninoise et postulez directement en ligne.
              </p>
              <ul class="space-y-2 mb-6">
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Base de données de postes vacants</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Filtrage par compétences et localisation</span>
                </li>
                <li class="flex items-start">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span>Alertes personnalisées</span>
                </li>
              </ul>
              <button class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md text-sm font-medium">
                Explorer les opportunités
              </button>
            </div>
          </div>

          <div class="bg-blue-50 p-8 rounded-lg border border-blue-100">
            <h3 class="text-xl font-semibold mb-4 text-center">Besoin d'assistance?</h3>
            <p class="text-center mb-6">
              Notre équipe est disponible pour vous aider dans vos démarches et répondre à vos questions.
            </p>
            <div class="flex justify-center">
                <a href="{{ route('faq') }}">
              <button class="border border-primary bg-white hover:bg-gray-50 text-primary px-4 py-2 rounded-md text-sm font-medium mr-4">
                Consulter la FAQ
              </button>
                </a>
              <a href="{{ route('contact') }}">
    <button class="border border-primary bg-white hover:bg-gray-50 text-primary px-4 py-2 rounded-md text-sm font-medium mr-4">
        Contactez-nous
    </button>
</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    @include('web.shared.footer')

  </body>
  </html>
