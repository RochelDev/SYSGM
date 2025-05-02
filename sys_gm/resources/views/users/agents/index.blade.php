@extends('dashboard')

@section('title', '| Acceuil')

@section('content')

<div class="container mx-auto px-4 py-8">
  <div>
      <h2 class="text-xl font-semibold mb-4">
          Bienvenue, @if(auth()->user()->profilActif()) cher {{auth()->user()->profilActif()->intitule_profil}}, @endif {{auth()->user()->name}} 
      </h2>
  </div>
</div>

@endsection