<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - MOBILITE</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    @include('web.shared.header')

    <div class="py-12 bg-gray-50 mt-[76px]">
      <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
          <h1 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h1>

          <p class="text-gray-700 mb-10 text-center max-w-2xl mx-auto">
            Vous avez des questions concernant la plateforme ou vos démarches de mobilité ?
            N'hésitez pas à nous contacter, notre équipe est à votre disposition.
          </p>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="p-6 rounded-lg bg-green-100 text-green-700 text-center">
              <div class="flex justify-center mb-4">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700"viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
              </div>
              <h3 class="font-semibold mb-2">Adresse</h3>
              <p class="text-gray-700 text-center">
                Direction de la Gestion des Carrières<br />
                Ministère de la Fonction Publique<br />
                Cotonou, Bénin
              </p>
            </div>

            <div class="p-6 rounded-lg bg-blue-100 text-blue-700 text-center">
              <div class="flex justify-center mb-4">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
              </div>
              <h3 class="font-semibold mb-2">Horaires</h3>
              <p class="text-gray-700 text-center">
                Lundi - Vendredi : 8h - 17h<br />
                Fermé les weekends et jours fériés
              </p>
            </div>

            <div class="p-6 rounded-lg bg-purple-100 text-purple-700 text-center">
              <div class="flex justify-center mb-4">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-700"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                </div>
              </div>
              <h3 class="text-xl font-semibold mb-3 text-center">Contact</h3>
              <p class="text-gray-700 text-center">
                Email : contact@mobilite.gouv.bj<br />
                Téléphone : +229 XX XX XX XX
              </p>
            </div>
          </div>

          <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-2">
            <label for="name" class="block font-medium text-gray-700">
                Nom complet
            </label>
            <input id="name" name="name" placeholder="Votre nom complet" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700" />
        </div>

        <div class="space-y-2">
            <label for="email" class="block font-medium text-gray-700">
                Email
            </label>
            <input id="email" type="email" name="email" placeholder="votre.email@exemple.com" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700" />
        </div>
    </div>

    <div class="space-y-2">
        <label for="subject" class="block font-medium text-gray-700">
            Sujet
        </label>
        <input id="subject" name="subject" placeholder="Objet de votre message" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700" />
    </div>

    <div class="space-y-2">
        <label for="message" class="block font-medium text-gray-700">
            Message
        </label>
        <textarea id="message" name="message" placeholder="Détaillez votre demande ou question ici..." class="min-h-[150px] w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-700 focus:border-blue-700"></textarea>
    </div>

    <div>
        <button type="submit" class="w-full md:w-auto bg-blue-700 hover:bg-blue-700/90 text-white px-4 py-2 rounded-md text-sm font-medium">
            Envoyer le message
        </button>
    </div>
</form>

          </div>
        </div>
      </div>
    </div>

    @include('web.shared.footer')

</body>
</html>
