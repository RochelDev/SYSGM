@extends('admin.admin')

@section('title', 'Tous les départements')

@section('content')


        <div class="d-flex justify-content-between align-items-center">
            <h1>DEPARTEMENTS</h1>
            <a href="{{ route('admin.departement.create')}}" class="btn btn-primary">Ajouter un département</a>
        </div>

    

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Libellé</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($departements as $departement)

            <tr>
                <td>{{ $departement->code }}</td>
                <td>{{ $departement->departement_lib }}</td>
                <td>
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.departement.edit', $departement)}}" class="btn btn-success">Editer</a>
                        <form action="{{ route('admin.departement.destroy', $departement)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </form>
                        
                    </div>
                    
                </td>

            </tr>

            @endforeach
            </tbody>
        </table>

 

    <table class="table table-bordered">

       
    </table>

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

@endsection





{{-- Autres codes --}}

@php

$type ??='text';
$class ??=null;
$name ??='';
$value='';
$label ??= ucfirst($name);
@endphp
<div @class(["form-group", $class])>
    <label for="{{$name}}">{{$label}}</label>
    @if($type=='textarea')
        <textarea class="form-control @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}">{{old($name, $value)}}"</textarea>
    @else
    <input class="form-control @error($name) is-invalid @enderror" type="{{$type}}" id="{{$name}}" name="{{$name}}"value="{{old($name, $value)}}">
    @endif

    @error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
</div>