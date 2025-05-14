<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
                        <a href="{{ route('login') }}" >
                        <button class="bg-blue-700 hover:bg-blue-700/90 text-white px-6 py-2.5 rounded-md text-sm font-medium h-11">
                          Déposer une Demande
                        </button>
                        </a>
                        <a href="{{route ('services')}}">
                        <button class="bg-white/10 hover:bg-white/20 border border-white text-white px-4 py-2 rounded-md text-sm font-medium inline-flex items-center h-11">
                          En savoir plus
                          <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </a>
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
            <div class="p-6 rounded-md transition-all duration-300 bg-green-50 shadow hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="m16 11 2 2 4-4"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-center">Étape 1</h3>
                <p class="text-gray-700 text-center">
                    Créez votre compte ou connectez-vous. Soumettez facilement votre demande en ligne.
                </p>
            </div>

            <div class="p-6 rounded-md transition-all duration-300 bg-blue-50 shadow hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-center">Étape 2</h3>
                <p class="text-gray-700 text-center">
                    Suivez l'état de votre dossier. Restez informé de chaque étape de votre demande.
                </p>
            </div>

            <div class="p-6 rounded-md transition-all duration-300 bg-purple-50 shadow hover:shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-center">Étape 3</h3>
                <p class="text-gray-700 text-center">
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
                <a href="javascript:void(0)" class="show-details text-blue-700 inline-flex items-center" data-target="mutation-details">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <div id="mutation-details" class="hidden mt-4">
                    <p class="text-gray-700">
                        Le déplacement d’office est une mutation par mesure disciplinaire. Les mutations nécessitées par les besoins de service ne sont pas considérées comme déplacements d’office. Le déplacement d’office est prononcé dans les cas suivants :
                    </p>
                    <ul class="list-disc pl-5 text-gray-700 mt-2">
                        <li>Exigence prouvée de pots de vin dans le traitement d’un dossier.</li>
                        <li>Divulgation d’une information ou d’un renseignement non autorisé ou classé confidentiel.</li>
                    </ul>
                </div>
            </div>

            <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div id="detachement-section" class="p-6 rounded-md transition-all duration-300 bg-white shadow border-t-4 border-blue-700 hover:shadow-lg">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Détachement</h3>
                    <p class="text-gray-600 mb-4">
                        Exercez votre activité hors de votre administration d'origine tout en conservant vos droits.
                    </p>
                    <a href="javascript:void(0)" class="show-details text-blue-700 inline-flex items-center" data-target="detachement-details">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <div id="detachement-details" class="hidden mt-4">
                        <p class="text-gray-700">
                            Le détachement est la position du fonctionnaire de l’État qui, placé hors de son administration d’origine, continue de bénéficier des droits à l’avancement et à la retraite prévus par les statuts particuliers de son corps d’origine, mais se trouve soumis à l’ensemble des règles propres aux organismes concernés pour ce qui est de ses fonctions.
                        </p>
                        <p class="text-gray-700 mt-2">
                            Le détachement du fonctionnaire ne peut avoir lieu que dans les cas suivants :
                        </p>
                        <ul class="list-disc pl-5 text-gray-700 mt-2">
                            <li>Exercer une fonction politique ou un mandat d’organisation des travailleurs lorsque la fonction ou le mandat comporte des obligations incompatibles avec l’exercice normal de l’emploi.</li>
                            <li>Exercer un enseignement ou remplir une mission quelconque à l’étranger ou dans les organismes internationaux.</li>
                            <li>Effectuer une mission auprès d’une entreprise publique ou privée en vue d’y exercer une fonction de direction, d’encadrement ou de recherche présentant un caractère d’intérêt public au service du développement national.</li>
                        </ul>
                        <p class="text-gray-700 mt-2">
                            Le détachement est prononcé par arrêté conjoint du ministre chargé de la fonction publique et du ministre en charge des finances.
                        </p>
                    </div>
                </div>

                <div id="mise-a-disposition-section" class="p-6 rounded-md transition-all duration-300 bg-white shadow border-t-4 border-blue-700 hover:shadow-lg">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mise à Disposition</h3>
                    <p class="text-gray-600 mb-4">
                        Travaillez pour une autre administration tout en restant rattaché à votre structure d'origine.
                    </p>
                    <a href="javascript:void(0)" class="show-details text-blue-700 inline-flex items-center" data-target="mise-a-disposition-details">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <div id="mise-a-disposition-details" class="hidden mt-4">
                        <p class="text-gray-700">
                            La disponibilité est prononcée, soit à la demande de l’intéressé, soit d’office à l’expiration d’un congé de maladie, de convalescence ou de longue durée.
                            La femme fonctionnaire bénéficie en outre, sur sa demande d’une disponibilité spéciale lorsqu’elle souhaite se consacrer à la prise en charge d’un de ses ascendants ou d’un des ascendants de son conjoint.
                            Le fonctionnaire mis en disponibilité qui, lors de sa réintégration refuse le poste qui lui est assigné, peut être licencié conformément aux dispositions statutaires.
                            La disponibilité est prononcée par arrêt conjoin du ministre en charge de la fonction publique et du ministre chargé des finances, après avis du ministre dont relève le fonctionnaire.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hidden {
        display: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showDetailsLinks = document.querySelectorAll('.show-details');

        showDetailsLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Empêche le lien de naviguer

                const targetId = this.dataset.target;
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.classList.toggle('hidden');
                }
            });
        });
    });
</script>

<!-- ====== Blog ====== -->
<section class="py-16 bg-gray-700">
    <div class="mx-auto max-w-7xl px-8 md:px-6">

        <!-- wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
           <!-- single-blog -->
<div class="w-full duration-200 hover:scale-95">
    <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
            <img src="{{ asset('img/Capture_dashboard.png') }}" alt="blog img" class="w-full">
        </a>
    </div>
    <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
        <div class="flex">
            <a href="{{ route('services') }}"  class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Services</a>
            <a href="{{ route('dashboard') }}" class="ml-auto rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Dashboard</a>
        </div>
        <hr class="my-4 border-slate-100">

    </div>
</div>


            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{asset('img/stat_capt.png')}}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
                    <div class="flex">
                        <a href="{{ route('contact') }}" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Contact</a>
                        <a href="#" class="ml-auto rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">A voir</a>

                    </div>
                    <hr class="my-4 border-slate-100">

                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95 ">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{asset('img/Capt_profil.png')}}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10 bg-white">
                    <div class="flex">
                        <a href="{{ route('about') }}" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">A propos</a>
                        <a href="{{ route('login') }}" class="ml-auto rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Login</a>
                    </div>
                    <hr class="my-4 border-slate-100">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== END Blog ====== -->

@include('web.shared.footer')

</body>
</html>
