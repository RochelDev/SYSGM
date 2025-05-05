@extends('dashboard')

@section('title', '| Acceuil')

@section('content')

<div class="container mx-auto px-4 py-8">
  <div>
      <h2 class="text-xl font-semibold mb-4">
          Bienvenue, @if(auth()->user()->profilActif()) cher {{auth()->user()->profilActif()->intitule_profil}}, @endif {{auth()->user()->name}} 
      </h2>
      <p class="text-muted-foreground mb-6">
            Vous n'avez pas de profil d'utilisateur associé à votre compte.
            <br>
            Veuillez vous rapprocher de votre adminitrateur pour obtenir de l'aide!
      </p>
  </div>
</div>

@endsection