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


<section class="relative hero-slider">
    <!-- Slide 1 -->
    <div class="slide active">
        <div class="w-full h-full bg-gray-800">
            <img src="{{asset('img/pexels-sora-shimazaki-5673502.jpg')}}" alt="Luxury Hotel Exterior" class="w-full h-[70vh] object-cover opacity-80">
            <div class="absolute inset-0 flex flex-wrap items-center justify-center px-4 sm:px-6 lg:px-8">
                <div class="container mx-auto px-4">
                    <div class="max-w-2xl space-y-6">
                      <h1 class="text-white/80 text-4xl md:text-5xl font-bold leading-tight">
                        Votre Mobilité Publique, <span class="text-blue-400">Simplifiée.</span>
                      </h1>
                      <p class="text-lg md:text-xl text-white/80">
                        Gérez vos demandes de mutation, détachement et mise à disposition en toute simplicité.
                      </p>
                      <div class="flex flex-wrap gap-4 pt-4">
                        <button class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-md text-sm font-medium h-11">
                          Déposer une Demande
                        </button>
                        <button class="bg-white/10 hover:bg-white/20 border border-white text-white px-4 py-2 rounded-md text-sm font-medium inline-flex items-center h-11">
                          En savoir plus 
                          <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    
   
</section>


<!-- How it Works Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">En 3 étapes simples, gérez votre mobilité</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Notre plateforme a été conçue pour rendre le processus de mobilité aussi simple et transparent que possible.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow hover:shadow-lg">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="m16 11 2 2 4-4"></path></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-center">Étape 1</h3>
          <p class="text-gray-600 text-center">
            Créez votre compte ou connectez-vous. Soumettez facilement votre demande en ligne.
          </p>
        </div>
        
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow hover:shadow-lg">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-center">Étape 2</h3>
          <p class="text-gray-600 text-center">
            Suivez l'état de votre dossier. Restez informé de chaque étape de votre demande.
          </p>
        </div>
        
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow hover:shadow-lg">
          <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
          </div>
          <h3 class="text-xl font-semibold mb-3 text-center">Étape 3</h3>
          <p class="text-gray-600 text-center">
            Découvrez les opportunités. Consultez les postes disponibles et les appels à candidatures.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Types of Mobility Section -->
  <section class="py-16">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Tous vos types de mobilité au même endroit</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Notre plateforme centralise la gestion de toutes vos démarches administratives liées à la mobilité.
        </p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow border-t-4 border-blue-700 hover:shadow-lg">
          <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          </div>
          <h3 class="text-xl font-semibold mb-3">Mutation</h3>
          <p class="text-gray-600 mb-4">
            Changez de poste au sein de l'administration publique béninoise tout en conservant votre grade.
          </p>
          <a href="#" class="text-blue-700 inline-flex items-center">
            En savoir plus 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow border-t-4 border-blue-700 hover:shadow-lg">
          <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
          </div>
          <h3 class="text-xl font-semibold mb-3">Détachement</h3>
          <p class="text-gray-600 mb-4">
            Exercez votre activité hors de votre administration d'origine tout en conservant vos droits.
          </p>
          <a href="#" class="text-blue-700 inline-flex items-center">
            En savoir plus 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        
        <div class="p-6 rounded-md transition-all duration-300 bg-white shadow border-t-4 border-blue-700 hover:shadow-lg">
          <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <h3 class="text-xl font-semibold mb-3">Mise à Disposition</h3>
          <p class="text-gray-600 mb-4">
            Travaillez pour une autre administration tout en restant rattaché à votre structure d'origine.
          </p>
          <a href="#" class="text-blue-700 inline-flex items-center">
            En savoir plus 
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>


<!-- ====== Blog ====== -->

<section class="py-16 bg-gray-700">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-blue-500">Our Blog</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">From Our Latest Blog</h1>
        </div>
        <!-- wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{asset('ZED.zahidul/images/blog/blog-1.png')}}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Services</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{asset('ZED.zahidul/images/blog/user-1.png')}}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{asset('ZED.zahidul/images/blog/blog-2.png')}}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Services</a>
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Design</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Dolore Placeat Ullam Architecto Deleniti Maxime Laborum</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{asset('ZED.zahidul/images/blog/user-2.png')}}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95 ">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{asset('ZED.zahidul/images/blog/blog-3.png')}}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Website</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{asset('ZED.zahidul/images/blog/user-3.png')}}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== END Blog ====== -->



@include('web.shared.footer')

</body>
</html>