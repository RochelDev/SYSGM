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
    

@include('web.shared.header')

<section class="px-4 py-8 mt-10">
        
  @yield ('content')    
   
</section>


@include('web.shared.footer')

<!-- ionicons cdn -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!-- alpine js cdn -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
