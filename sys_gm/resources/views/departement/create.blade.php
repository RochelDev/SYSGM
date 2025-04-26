<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Administration</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts/icomoon/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    
  </head>
  <body>
    <div class="container-fluid mt-5">
            <form class="vstack gap-2" action="{{route($departement->exists ? 'admin.departement.update':'admin.departement.store', $departement)}}" method="post">

                @csrf
                @method($departement->exists? 'put':'post')
        
                
                <div class="row">
                        @include('shared.input', ['class'=> 'col', 'label'=>'Libellé', 'name'=>'lib_dep', 'value'=> $departement->lib_dep])
                </div>
        
        
                
                
                
                <div>
        
                    <button  class="btn btn-primary" onclick="return confirm('Êtes-vous sûr de voûloir  @if($departement->exists) modifier @else enregistrer @endif ce département ?')">
                        @if($departement->exists)
                            Modifier
                        @else
                        Enregistrer
                        @endif
                    </button>
                </div>
            </form>
        
        
        
        
            @if ($errors->any())
        
                <div class="alert alert-danger">
        
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        
                </div>
        
            @endif

        
    
    </div> 

    


    {{-- @if (Route::has('page.acceuil.index'))
        @yield('index')
    @else --}}

    {{-- <div class="container"> --}}
        
        {{-- @if(session('success'))
        <div class="alert alert-succes">
            {{session('success')}}
        </div>
        @endif --}}

        {{-- @yield('content')
    </div> --}}

    {{-- @endif --}}

            
            

     <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
  </body>
</html> 
    
    
    
    
    