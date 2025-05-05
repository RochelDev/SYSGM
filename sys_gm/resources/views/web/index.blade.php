<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel | Experience Paradise</title>

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Remix Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" rel="stylesheet">
    <!-- Custom Styles -->

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-x-hidden">
    <!-- Header Section with Sticky Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
        <div class="bg-white/90 backdrop-blur-md shadow-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#" class="flex items-center">
                            <h1 class="text-2xl font-semibold text-gray-800">AZURE<span class="text-blue-600">RESORT</span></h1>
                        </a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                            <i class="ri-menu-line text-2xl"></i>
                        </button>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex space-x-10">
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Rooms</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Dining</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Amenities</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Location</a>
                        <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    </nav>
                    
                    <!-- Contact & Book Now Button -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#" class="text-gray-700 hover:text-blue-600">
                            <i class="ri-phone-line mr-1"></i> +1 234 567 8900
                        </a>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-md font-medium transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation (Hidden by default) -->
        <div class="md:hidden bg-white shadow-md absolute w-full left-0 right-0 transition-all duration-300 overflow-hidden h-0" id="mobile-menu">
            <div class="px-5 pt-2 pb-6">
                <div class="flex flex-col space-y-5 mt-4">
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Rooms</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Dining</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Amenities</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Location</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    <div class="flex items-center">
                        <a href="#" class="text-gray-700 hover:text-blue-600">
                            <i class="ri-phone-line mr-1"></i> +1 234 567 8900
                        </a>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="block w-full bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 text-center rounded-md font-medium transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section with Image Carousel -->
    <section class="relative hero-slider pt-20">
        <!-- Slide 1 -->
        <div class="slide active">
            <div class="w-full h-full bg-gray-800">
                <img src="{{asset('img/Luxury Hotel Exterior.png')}}" alt="Luxury Hotel Exterior" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">Experience Luxury By The Ocean</h1>
                        <p class="mt-6 text-lg sm:text-xl text-gray-200">Where elegance meets coastal paradise</p>
                        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-md transition-colors duration-300">Explore Rooms</a>
                            <a href="#" class="bg-transparent border-2 border-white text-white font-medium px-8 py-3 rounded-md hover:bg-white/10 transition-colors duration-300">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="slide">
            <div class="w-full h-full bg-gray-800">
                <img src="{{asset('img/Luxury Hotel Exterior.png')}}" alt="Luxury Suite Interior" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">Unwind in Modern Elegance</h1>
                        <p class="mt-6 text-lg sm:text-xl text-gray-200">Suites designed for ultimate relaxation</p>
                        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-md transition-colors duration-300">Explore Rooms</a>
                            <a href="#" class="bg-transparent border-2 border-white text-white font-medium px-8 py-3 rounded-md hover:bg-white/10 transition-colors duration-300">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="slide">
            <div class="w-full h-full bg-gray-800">
                <img src="{{asset('img/Infinity Pool View.png')}}" alt="Infinity Pool View" class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">Immerse in Tranquility</h1>
                        <p class="mt-6 text-lg sm:text-xl text-gray-200">Create unforgettable memories in paradise</p>
                        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-8 py-3 rounded-md transition-colors duration-300">Explore Rooms</a>
                            <a href="#" class="bg-transparent border-2 border-white text-white font-medium px-8 py-3 rounded-md hover:bg-white/10 transition-colors duration-300">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Arrows -->
        <button class="absolute top-1/2 left-4 z-10 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white rounded-full w-12 h-12 flex items-center justify-center backdrop-blur-sm transition-colors duration-300" id="prev-btn">
            <i class="ri-arrow-left-s-line text-2xl"></i>
        </button>
        <button class="absolute top-1/2 right-4 z-10 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white rounded-full w-12 h-12 flex items-center justify-center backdrop-blur-sm transition-colors duration-300" id="next-btn">
            <i class="ri-arrow-right-s-line text-2xl"></i>
        </button>
        
        <!-- Slide Indicators -->
        <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3 z-10">
            <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300 indicator active" data-index="0"></button>
            <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300 indicator" data-index="1"></button>
            <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition-opacity duration-300 indicator" data-index="2"></button>
        </div>
    </section>

    <!-- About Section -->
<section class="py-20 bg-white" id="about">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Welcome to Azure Resort</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Where luxury meets coastal tranquility, creating an unforgettable retreat for our distinguished guests.</p>
        </div>
        
        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Image with Overlay -->
            <div class="relative rounded-lg overflow-hidden group">
                <div class="aspect-w-16 aspect-h-12">
                    <img src="{{asset('img/Resort Overview.png')}}" alt="Resort Overview" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                    <p class="text-white font-medium">Established in 2010</p>
                    <h3 class="text-white text-xl font-semibold">Award-winning luxury resort</h3>
                </div>
            </div>
            
            <!-- Right: Content -->
            <div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Experience Unparalleled Luxury</h3>
                <p class="text-gray-600 mb-6">
                    Nestled along the pristine shoreline, Azure Resort stands as a beacon of elegance and sophistication. Our resort combines contemporary design with natural beauty, offering a sanctuary where time slows down and memories are created.
                </p>
                <p class="text-gray-600 mb-8">
                    With meticulous attention to detail and personalized service, we ensure that every moment of your stay exceeds expectations. From breathtaking ocean views to world-class amenities, we've crafted an experience that delights all the senses.
                </p>
                
                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Feature 1 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="ri-map-pin-line text-xl text-blue-600"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Prime Location</h4>
                            <p class="mt-2 text-gray-600">Just steps away from crystal-clear waters and vibrant city attractions.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="ri-star-line text-xl text-blue-600"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">5-Star Service</h4>
                            <p class="mt-2 text-gray-600">Award-winning hospitality with personalized attention to every detail.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="ri-restaurant-line text-xl text-blue-600"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Fine Dining</h4>
                            <p class="mt-2 text-gray-600">Exquisite culinary experiences from our renowned chefs.</p>
                        </div>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="ri-spa-line text-xl text-blue-600"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-gray-900">Wellness Spa</h4>
                            <p class="mt-2 text-gray-600">Rejuvenating treatments in our state-of-the-art wellness center.</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="mt-10">
                    <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors duration-300">
                        Discover Our Story
                        <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Stats Section -->
        <div class="mt-24 grid grid-cols-2 sm:grid-cols-4 gap-8 text-center">
            <!-- Stat 1 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-blue-600 text-4xl font-bold mb-2">150+</h4>
                <p class="text-gray-700">Luxury Rooms</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-blue-600 text-4xl font-bold mb-2">15</h4>
                <p class="text-gray-700">Years Experience</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-blue-600 text-4xl font-bold mb-2">4</h4>
                <p class="text-gray-700">Restaurants</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-blue-600 text-4xl font-bold mb-2">98%</h4>
                <p class="text-gray-700">Guest Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Room Showcase Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">Luxurious Accommodations</h2>
            <div class="w-24 h-1 bg-blue-600 mx-auto mt-4 mb-6"></div>
            <p class="text-gray-600 max-w-2xl mx-auto">Discover our elegantly designed rooms and suites, each offering a perfect blend of comfort and sophistication for an unforgettable stay.</p>
        </div>

        <!-- Room Category Tabs -->
        <div class="flex flex-wrap justify-center mb-8 border-b">
            <button class="room-tab active px-6 py-3 text-gray-800 font-medium hover:text-blue-600 border-b-2 border-transparent transition-colors duration-300" data-category="all">All Rooms</button>
            <button class="room-tab px-6 py-3 text-gray-800 font-medium hover:text-blue-600 border-b-2 border-transparent transition-colors duration-300" data-category="standard">Standard</button>
            <button class="room-tab px-6 py-3 text-gray-800 font-medium hover:text-blue-600 border-b-2 border-transparent transition-colors duration-300" data-category="deluxe">Deluxe</button>
            <button class="room-tab px-6 py-3 text-gray-800 font-medium hover:text-blue-600 border-b-2 border-transparent transition-colors duration-300" data-category="suite">Suites</button>
        </div>

        <!-- Room Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Standard Room Card -->
            <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-1" data-category="standard">
                <div class="relative">
                    <img src="{{asset('img/Standard Room.png')}}" alt="Standard Room" class="w-full h-64 object-cover">
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">From $199/night</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Standard Ocean View</h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-fill"></i>
                        </div>
                        <span class="text-gray-600 text-sm">4.5 (28 reviews)</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-user-line mr-1"></i> 2 Guests
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-home-wifi-line mr-1"></i> Free WiFi
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-ruler-2-line mr-1"></i> 30 m²
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">Our Standard Ocean View rooms offer stunning vistas, comfortable furnishings, and all essential amenities for a relaxing coastal getaway.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details <i class="ri-arrow-right-line ml-1"></i>
                        </a>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-300">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Deluxe Room Card -->
            <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-1" data-category="deluxe">
                <div class="relative">
                    <img src="{{asset('img/Deluxe Room.png')}}" alt="Deluxe Room" class="w-full h-64 object-cover">
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">From $299/night</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Deluxe Ocean Suite</h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <span class="text-gray-600 text-sm">5.0 (42 reviews)</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-user-line mr-1"></i> 2-3 Guests
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-goblet-line mr-1"></i> Mini Bar
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-ruler-2-line mr-1"></i> 45 m²
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">Elevate your stay with our Deluxe Ocean Suite featuring premium amenities, a spacious layout, and breathtaking panoramic ocean views.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details <i class="ri-arrow-right-line ml-1"></i>
                        </a>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-300">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Suite Room Card -->
            <div class="room-card bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:shadow-xl hover:-translate-y-1" data-category="suite">
                <div class="relative">
                    <img src="{{asset('img/Presidential Suite.png')}}" alt="Presidential Suite" class="w-full h-64 object-cover">
                    <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">From $499/night</div>
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">Most Popular</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Presidential Suite</h3>
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 mr-2">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <span class="text-gray-600 text-sm">5.0 (63 reviews)</span>
                    </div>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-user-line mr-1"></i> 4 Guests
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-tv-line mr-1"></i> Smart TV
                        </span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-xs flex items-center">
                            <i class="ri-ruler-2-line mr-1"></i> 80 m²
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4">Experience ultimate luxury in our Presidential Suite with separate living areas, premium amenities, and personalized concierge service.</p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            View Details <i class="ri-arrow-right-line ml-1"></i>
                        </a>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-300">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- More Room Cards can be added here -->
        </div>

        <!-- View All Rooms Button -->
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md font-medium transition-colors duration-300">
                View All Accommodations <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>
</section>




<!-- Experience Highlights Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Unforgettable Experiences</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Discover exceptional moments and create memories that last a lifetime at Azure Resort.</p>
      </div>
  
      <!-- Experience Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Experience Card 1: Dining -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
          <div class="relative h-64">
            <img src="{{asset('img/Fine Dining Experience.png')}}" alt="Fine Dining Experience" class="w-full h-full object-cover">
            <div class="absolute top-4 right-4 bg-blue-600 text-white text-sm font-medium py-1 px-3 rounded-full">
              <i class="ri-star-fill mr-1"></i> Featured
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center mb-4">
              <i class="ri-restaurant-line text-blue-600 text-2xl mr-3"></i>
              <h3 class="text-xl font-semibold text-gray-900">Gourmet Dining</h3>
            </div>
            <p class="text-gray-600 mb-6">Indulge in exquisite culinary creations crafted by our award-winning chefs using locally-sourced ingredients and innovative techniques.</p>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">
                <i class="ri-time-line mr-1"></i> 6:30 PM - 10:30 PM
              </span>
              <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                Explore Menu <i class="ri-arrow-right-line ml-1"></i>
              </a>
            </div>
          </div>
        </div>
  
        <!-- Experience Card 2: Spa -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
          <div class="relative h-64">
            <img src="{{asset('img/Luxury Spa Treatment.png')}}" alt="Luxury Spa Treatment" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <div class="flex items-center mb-4">
              <i class="ri-spa-line text-blue-600 text-2xl mr-3"></i>
              <h3 class="text-xl font-semibold text-gray-900">Wellness Sanctuary</h3>
            </div>
            <p class="text-gray-600 mb-6">Restore your balance and rejuvenate your senses with our signature treatments combining ancient healing techniques and modern luxury.</p>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">
                <i class="ri-time-line mr-1"></i> 9:00 AM - 8:00 PM
              </span>
              <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                View Treatments <i class="ri-arrow-right-line ml-1"></i>
              </a>
            </div>
          </div>
        </div>
  
        <!-- Experience Card 3: Beach Activities -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
          <div class="relative h-64">
            <img src="{{asset('img/Beach Activities.png')}}" alt="Beach Activities" class="w-full h-full object-cover">
          </div>
          <div class="p-6">
            <div class="flex items-center mb-4">
              <i class="ri-sailing-line text-blue-600 text-2xl mr-3"></i>
              <h3 class="text-xl font-semibold text-gray-900">Ocean Adventures</h3>
            </div>
            <p class="text-gray-600 mb-6">Dive into crystal-clear waters and explore vibrant coral reefs or enjoy thrilling water sports along our private shoreline.</p>
            <div class="flex items-center justify-between">
              <span class="text-gray-500">
                <i class="ri-time-line mr-1"></i> 8:00 AM - 6:00 PM
              </span>
              <a href="#" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                Browse Activities <i class="ri-arrow-right-line ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Seasonal Offers -->
      <div class="mt-16 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl overflow-hidden shadow-lg">
        <div class="md:flex">
          <div class="md:w-1/2 p-8 md:p-12">
            <span class="inline-block py-1 px-3 bg-blue-900/50 text-white text-sm font-medium rounded-full mb-4">Limited Time Offer</span>
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Summer Escape Package</h3>
            <p class="text-blue-100 mb-6">Book a 5-night stay and receive a complimentary sunset dinner for two on the beach, plus a luxury spa treatment.</p>
            <ul class="text-blue-100 mb-8">
              <li class="flex items-center mb-2">
                <i class="ri-check-line text-blue-300 mr-2"></i> Valid for stays between June - August
              </li>
              <li class="flex items-center mb-2">
                <i class="ri-check-line text-blue-300 mr-2"></i> Includes daily breakfast
              </li>
              <li class="flex items-center">
                <i class="ri-check-line text-blue-300 mr-2"></i> Free airport transfer
              </li>
            </ul>
            <a href="#" class="inline-block bg-white text-blue-600 hover:bg-blue-50 font-medium px-6 py-3 rounded-md transition-colors duration-300">
              View Details
            </a>
          </div>
          <div class="md:w-1/2 bg-blue-700 relative">
            <img src="{{asset('img/Summer Escape Package.png')}}" alt="Summer Escape Package" class="w-full h-full object-cover opacity-90">
          </div>
        </div>
      </div>
  
      <!-- Guest Testimonials -->
      <div class="mt-16">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-12">What Our Guests Say</h3>
        
        <div class="relative" id="testimonials-container">
          <!-- Testimonials Slider -->
          <div class="flex transition-transform duration-500 ease-in-out" id="testimonials-slider">
            <!-- Testimonial 1 -->
            <div class="testimonial-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
              <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
                <div class="flex mb-4">
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                </div>
                <p class="text-gray-600 italic mb-6">"An absolutely magical experience. The staff went above and beyond to make our honeymoon special. The beachfront suite was breathtaking and the private dinner on the beach was unforgettable."</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="{{asset('img/Customer.png')}}" alt="Guest" class="w-full h-full object-cover">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Emily & Michael</h4>
                    <p class="text-gray-500 text-sm">New York, USA</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
              <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
                <div class="flex mb-4">
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                </div>
                <p class="text-gray-600 italic mb-6">"The Azure Resort exceeded all our expectations. The wellness sanctuary offered the most relaxing treatments we've ever experienced. We'll definitely be returning next year!"</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="{{asset('img/Customer.png')}}" alt="Guest" class="w-full h-full object-cover">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                    <p class="text-gray-500 text-sm">London, UK</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
              <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
                <div class="flex mb-4">
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                </div>
                <p class="text-gray-600 italic mb-6">"The culinary experience at Azure Resort is second to none. Every meal was a delightful adventure for the senses. The staff's attention to detail made our anniversary truly special."</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="{{asset('img/Customer.png')}}" alt="Guest" class="w-full h-full object-cover">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">David & Laura</h4>
                    <p class="text-gray-500 text-sm">Sydney, Australia</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-slide w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
              <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
                <div class="flex mb-4">
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                  <i class="ri-star-fill text-yellow-400"></i>
                </div>
                <p class="text-gray-600 italic mb-6">"The ocean adventure activities were the highlight of our family vacation. The kids loved the snorkeling tours, and we appreciated the professional guides. Perfect balance of luxury and adventure."</p>
                <div class="flex items-center">
                  <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                    <img src="{{asset('img/Customer.png')}}" alt="Guest" class="w-full h-full object-cover">
                  </div>
                  <div>
                    <h4 class="font-semibold text-gray-900">The Rodriguez Family</h4>
                    <p class="text-gray-500 text-sm">Barcelona, Spain</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Navigation Arrows -->
          <button class="absolute top-1/2 -left-4 z-10 transform -translate-y-1/2 bg-white hover:bg-gray-100 text-blue-600 rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-colors duration-300 focus:outline-none" id="testimonial-prev">
            <i class="ri-arrow-left-s-line text-xl"></i>
          </button>
          <button class="absolute top-1/2 -right-4 z-10 transform -translate-y-1/2 bg-white hover:bg-gray-100 text-blue-600 rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-colors duration-300 focus:outline-none" id="testimonial-next">
            <i class="ri-arrow-right-s-line text-xl"></i>
          </button>
        </div>
        
        <!-- Slide Indicators -->
        <div class="flex justify-center space-x-2 mt-8">
          <button class="w-2.5 h-2.5 rounded-full bg-blue-600 testimonial-indicator active" data-index="0"></button>
          <button class="w-2.5 h-2.5 rounded-full bg-gray-300 testimonial-indicator" data-index="1"></button>
          <button class="w-2.5 h-2.5 rounded-full bg-gray-300 testimonial-indicator" data-index="2"></button>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Location Advantages Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Prime Location</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Perfectly situated to experience the best of the city while enjoying serene ocean views and easy access to major attractions.</p>
      </div>
  
      <!-- Interactive Map and Content -->
      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Map Container -->
        <div class="w-full lg:w-1/2 bg-white rounded-xl shadow-md overflow-hidden">
          <div class="relative w-full h-96" id="map-container">
            <!-- Replace with actual map integration -->
            <img src="{{asset('img/Hotel Map Location.png')}}" alt="Hotel Map Location" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-blue-600/10 backdrop-blur-sm">
              <div class="text-center p-6 bg-white/90 rounded-lg shadow-lg max-w-md">
                <i class="ri-map-pin-line text-4xl text-blue-600 mb-3"></i>
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Azure Resort & Spa</h3>
                <p class="text-gray-600">123 Oceanview Drive, Paradise Bay</p>
                <button id="view-directions" class="mt-4 flex items-center justify-center mx-auto text-blue-600 hover:text-blue-800 font-medium">
                  <i class="ri-road-map-line mr-2"></i> Get Directions
                </button>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Location Highlights -->
        <div class="w-full lg:w-1/2">
          <!-- Transportation Options -->
          <div>
            <h3 class="text-2xl font-semibold text-gray-800 mb-5">Getting Here</h3>
            <div class="bg-white p-6 rounded-lg shadow-sm">
              <div class="space-y-4">
                <!-- Transportation 1 -->
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                    <i class="ri-flight-takeoff-line text-xl"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800">International Airport</h4>
                    <p class="text-gray-600">25 minutes by car (18 miles)</p>
                  </div>
                </div>
  
                <!-- Transportation 2 -->
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                    <i class="ri-taxi-line text-xl"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800">Hotel Shuttle Service</h4>
                    <p class="text-gray-600">Complimentary for all guests</p>
                  </div>
                </div>
  
                <!-- Transportation 3 -->
                <div class="flex items-center gap-4">
                  <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                    <i class="ri-train-line text-xl"></i>
                  </div>
                  <div>
                    <h4 class="font-medium text-gray-800">Central Station</h4>
                    <p class="text-gray-600">10 minutes by car (2 miles)</p>
                  </div>
                </div>
              </div>
  
              <button id="transportation-help" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition-colors duration-300 flex justify-center items-center">
                <i class="ri-customer-service-2-line mr-2"></i> Need Help with Transportation?
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer Section -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Footer Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 pb-12 border-b border-gray-700">
            <!-- Column 1: Logo & About -->
            <div>
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-white">AZURE<span class="text-blue-400">RESORT</span></h2>
                </div>
                <p class="text-gray-400 mb-6">Experience luxury redefined at our exclusive beachfront paradise. Where every moment becomes a treasured memory.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="ri-facebook-fill text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="ri-instagram-line text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="ri-twitter-x-line text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="ri-pinterest-line text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-6 text-white">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Rooms & Suites</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Dining Experience</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Spa & Wellness</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Special Offers</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">Gallery</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-6 text-white">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="ri-map-pin-line text-blue-400 mt-1 mr-3"></i>
                        <span class="text-gray-400">123 Paradise Bay, Coastal Drive<br>Azure City, AC 12345</span>
                    </li>
                    <li class="flex items-center">
                        <i class="ri-phone-line text-blue-400 mr-3"></i>
                        <span class="text-gray-400">+1 234 567 8900</span>
                    </li>
                    <li class="flex items-center">
                        <i class="ri-mail-line text-blue-400 mr-3"></i>
                        <span class="text-gray-400">info@azureresort.com</span>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-6 text-white">Newsletter</h3>
                <p class="text-gray-400 mb-4">Subscribe to receive special offers and updates</p>
                <form id="newsletter-form" class="space-y-3">
                    <div class="relative">
                        <input 
                            type="email" 
                            placeholder="Your email address" 
                            class="w-full bg-gray-800 border border-gray-700 rounded-md py-3 px-4 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required
                        >
                    </div>
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-md transition-colors duration-300 flex justify-center items-center"
                    >
                        Subscribe
                        <i class="ri-arrow-right-line ml-2"></i>
                    </button>
                </form>
                <div id="newsletter-success" class="hidden mt-3 text-sm text-green-400">
                    <i class="ri-check-line mr-1"></i> Thank you for subscribing!
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-8 flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-500 text-sm mb-4 md:mb-0">
                &copy; 2025 Azure Resort. All rights reserved.
            </div>
            <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500">
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Terms & Conditions</a>
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Sitemap</a>
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Accessibility</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>