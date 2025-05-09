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

    <!-- About Content -->
    <div class="py-12 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
          <h1 class="text-3xl font-bold mb-6">À propos de MOBILITE</h1>
          
          <p class="text-gray-700 mb-6">
            Notre plateforme a pour mission de faciliter les démarches administratives liées à la 
            mobilité des fonctionnaires, en fournissant des informations claires et accessibles sur 
            les procédures, les délais et les documents requis pour chaque type de mobilité.
          </p>

          <p class="text-gray-700 mb-6">
            Nous visons à simplifier les processus de mobilité pour les agents publics béninois, 
            en rendant les démarches plus transparentes et en réduisant les délais de traitement 
            des demandes.
          </p>

          <h2 class="text-2xl font-semibold mt-10 mb-4">Notre Vision</h2>
          <p class="text-gray-700 mb-6">
            MOBILITE aspire à devenir la référence en matière de gestion de la mobilité des agents 
            publics au Bénin, en proposant un service de qualité, accessible et efficace.
          </p>

          <h2 class="text-2xl font-semibold mt-10 mb-4">Nos Valeurs</h2>
          <div class="space-y-4">
            <div>
              <h3 class="font-semibold text-lg">Transparence</h3>
              <p class="text-gray-700">Nous croyons en la clarté des informations et des processus.</p>
            </div>
            
            <div>
              <h3 class="font-semibold text-lg">Efficacité</h3>
              <p class="text-gray-700">Nous nous engageons à fournir un service rapide et efficace.</p>
            </div>
            
            <div>
              <h3 class="font-semibold text-lg">Accessibilité</h3>
              <p class="text-gray-700">Nous rendons l'information et les services accessibles à tous.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @include('web.shared.footer')

  </body>
  </html>
