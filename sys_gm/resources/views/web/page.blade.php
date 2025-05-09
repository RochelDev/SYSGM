<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind css</title>
    <!-- favicon link -->
    {{-- <link rel="shortcut icon" href="{{asset('ZED.zahidul/images/favicon.ico')}}" type="image/x-icon"> --}}
    {{-- <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon"> --}}

    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    

<!-- ====== header ====== -->

<header class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <nav class="bg-white/90 backdrop-blur fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> --}}
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MOB<span class="text-blue-700">ILITE</span> </span>
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md bg-blue-800 px-4 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-lg bg-blue-800 px-4 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600">Se connecter</a>
                @endauth
            @endif
        </div>
        </div>
    </nav>
  
</header>
<!-- ====== END header ====== -->


<section class="relative hero-slider">
    <!-- Slide 1 -->
    <div class="slide active">
        <div class="w-full h-full bg-gray-800">
            <img src="{{asset('img/pexels-sora-shimazaki-5673502.jpg')}}" alt="Luxury Hotel Exterior" class="w-full h-[70vh] object-cover opacity-80">
            <div class="absolute inset-0 flex flex-wrap items-center justify-center px-4 sm:px-6 lg:px-8">
                <div class="w-full lg:w-5/12">
                    <h1 class="text-slate-800 mb-3 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px]">Everything you need to run your online <span class="text-blue-600">business</span></h1>
                    <p class="text-white mb-8 max-w-[480px] text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias voluptate esse blanditiis molestiae repudiandae fugiat eius sapiente expedita ut.
                    </p>
                    
                    <a class="w-full rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto cursor-pointer">Soumettre une demande</a>
    
                    <a class="mt-4 box-border w-full rounded-md border border-black px-8 py-2.5 font-semibold text-black shadow-md shadow-blue-500/10 hover:border-black hover:bg-black hover:text-white duration-200 sm:ml-4 sm:mt-0 sm:w-auto cursor-pointer">En savoir plus </a>
    
                </div>

                <div class="w-full px-4 lg:w-6/12"></div>
            </div>
        </div>
    </div>

    
   
</section>


<!-- ====== about ====== -->

<section class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="md:flex md:justify-between md:gap-6">
            <div class="md:w-6/12">
                 <!-- heading text -->
                <div class="mb-5 sm:mb-10">
                    <span class="font-medium text-blue-500">A propos</span>
                    {{-- <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Creative Marketing agency</h1> --}}
                </div>
                <p class="text-slate-500 mb-6">
                    Notre plateforme a pour mission de faciliter les démarches administratives liées à la mobilité des fonctionnaires, 
                    en fournissant des informations claires et accessibles sur les procédures, les délais et les documents requis pour 
                    chaque type de mobilité. <br> Elle vise à simplifier l'accès aux services de mobilité, à réduire les délais 
                    de traitement des dossiers, et à améliorer la transparence et l'efficacité des procédures administratives.
                </p>
                <ul>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                            <ion-icon name="briefcase-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </li>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                            <ion-icon name="cube-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Omnis unde nam quia harum voluptatum itaque iste nostrum amet vero.</p>
                    </li>
                    <li class="mb-6 flex items-center">
                        <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                        </div>
                        <p class="ml-4 max-w-md font-medium text-slate-600">Id quos et quidem perspiciatis similique! Rerum, natus temporibus.</p>
                    </li>
                </ul>
            </div>

            <!-- about img -->
            <div class="mt-8 flex justify-center md:mt-0 md:w-5/12">
                <img src="{{asset('img/about.png')}}" alt="about img" class="max-h-[500px] md:max-h-max">
            </div>

        </div>
    </div>
</section>

<!-- ====== END about ====== -->





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


<!-- ====== footer ====== -->

<footer class="bg-slate-50/80 pt-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">

        <!-- footer top -->
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2">
                <h1 class="text-sm text-slate-500">LOGO</h1>
                {{-- <img src="{{asset('ZED.zahidul/images/logo.png')}}" alt="footer logo" class="w-36"> --}}
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-slate-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    <p class="text-sm text-slate-500 mt-2">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <div class="grid row-gap-8 grid-cols-2 gap-5 md:grid-cols-4 lg:col-span-4">
                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Category</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">News</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">World</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Games</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">References</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Business</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Web</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">eCommerce</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Business</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Entertainment</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Portfolio</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Media</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Brochure</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Nonprofit</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Educational</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Projects</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Infopreneur</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Personal</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Wiki</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Forum</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End footer top -->

        <!-- footer bottom -->
        <div class="flex flex-col justify-between border-t py-8 sm:flex-row">
            <p class="text-sm text-slate-500">© Copyright 2022 <a href="#" class="text-slate-700 hover:text-blue-500"> ZED.zahidul</a> All rights reserved.</p>
            <div class="mt-4 flex items-center space-x-4 sm:mt-0">
                <a href="#">
                    <ion-icon name="logo-facebook" class="text-2xl text-slate-500 hover:text-blue-500 duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter" class="text-2xl text-slate-500 hover:text-blue-500 duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-youtube" class="text-2xl text-slate-500 hover:text-blue-500 duration-300"></ion-icon>
                </a>
            </div>
        </div>
        <!-- End footer bottom -->

    </div>
</footer>

<!-- ====== END footer ====== -->


<!-- ionicons cdn -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!-- alpine js cdn -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>