<!-- @extends('layouts.template')

@section('titre', 'Détail du jeu')

@section('contenu') -->

<!-- <h1>{{$jeux->titre}}</h1> -->
<!-- <h1>Détails d'un jeu</h1>

<h2>{{__('game details')}}</h2>
<div class="overflow-hidden
shadow-sm
rounded-lg
bg-indigo-500
hover:bg-cyan-600/50">

    <div class="p-5
text-white
text-center
md:text-left">
        Titre : {{$jeux->titre}}
    </div>
</div> -->


<!-- @endsection -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
id = {{$id}} jeux = {{$jeux->titre}}
</body>
</html> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails jeu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                    <div class="overflow-hidden
                                shadow-sm
                                rounded-lg">

                        <div class="p-5
                                    text-black
                                    text-center
                                    md:text-left">
                            Titre : {{$jeux->titre}}
                            <p>Categorie : {{$categorie->libelle}}</p>
                        </div>
                        <a href="{{route('jeux.edit', $jeux->id)}}"><x-modifier-btn></x-modifier-btn></a>
                        <x-supprimer-btn :action="route('jeux.destroy', $jeux->id)"></x-supprimer-btn >
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>