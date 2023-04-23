<!-- @extends('layouts.template')

@section('titre', 'jeux')

@section('contenu') -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->

<!-- <h1>{{__('list of all games')}}</h1>
<ul>
    @foreach($jeux as $jeu)
    <li><a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></li>
    @endforeach
</ul>

@endsection -->

<!-- </body>

</html> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jeux') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all games')}}</h1>

                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Action</th>
                            <th><a href="{{route('jeux.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($jeux as $jeu)
                        <tr>

                            <td>{{$jeu->id}}</td>
                            <td>{{$jeu->titre}}</td>
                            <td><a href="{{route('jeux.edit', $jeu->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('jeux.show', $jeu->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('jeux.destroy', $jeu->id)"></x-supprimer-btn >
                            </td>
                        </tr>
                        @endforeach

                        </ul>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>