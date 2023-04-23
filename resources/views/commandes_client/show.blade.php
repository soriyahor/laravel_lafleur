<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails Commande client') }}
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
                            Titre : {{$articles->nom}}
                            <p>Quantité : </p>
                            <p>Categorie : {{$categorie->nom}}</p>
                            <p>Couleur : {{$couleur->nom}}</p>
                            <p>Conditionnement : {{$conditionnement->nom}}</p>
                        </div>
                        <a href="{{route('articles.edit', $articles->id)}}"><x-modifier-btn></x-modifier-btn></a>
                        <x-supprimer-btn :action="route('articles.destroy', $articles->id)"></x-supprimer-btn >
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>