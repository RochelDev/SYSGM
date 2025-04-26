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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container-fluid mt-5">
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center ">
            <h1 style="font-size: 3em">Departements</h1>
            <a href="{{ route('admin.departement.create')}}" class="btn btn-primary">Ajouter un departement</a>
        </div>
        
        
        
          <table class="table table-striped py-2">
              <thead>
                  <tr>
                      <th>Libellé</th>
                      <th class="text-end">Actions</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($departements as $departement)
              
        
              <tr>
                  <td style="text-colo">{{$departement->lib_dep}}</td>
                  <td>
                      <div class="d-flex gap-2 justify-content-end">
                          <a href="{{ route('admin.departement.edit', $departement)}}" class="btn btn-success">Editer</a>
                          {{-- <a href="{{ route('admin.departement.destroy', $departement)}}" class="btn btn-success">supprimer</a> --}}
                          <form action="{{ route('admin.departement.destroy', $departement)}}" method="post">
                              @csrf
                              @method("delete")
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de voûloir supprimer ce département ?')"> Supprimer </button>
                          </form>



                          
                          
                      </div>
                      
                  </td>
        
              </tr>
        
              @endforeach
              </tbody>
          </table>
        
        
        
        {{-- <table class="table table-bordered">
        
         
        </table> --}}
        
        @if ($errors->any())
        
            <div class="alert alert-danger">
        
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        
            </div>
        
        @endif
        
        {{$departements->links()}}
        </div>
    
    </div>
    
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
    
    
    
    
    