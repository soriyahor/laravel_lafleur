<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all articles')}}</h1>

                    <table class="border">
                        <thead>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Sélection</th>
                            <th>Couleur</th>
                            <th>Conditionnement</th>
                            <th>Categorie</th>
                            <th>Action</th>
                            <th><a href="{{route('articles.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($articles as $article)
                        <tr class="odd:bg-gray-100">

                        <td class="table-border">{{$article->id}}</td>
                            <td class="table-border">{{$article->nom}}</td>
                            <td class="table-border">{{$article->quantite_stock}}</td>
                            <td class="table-border">{{$article->prix}}</td>
                            <td class="table-border">{{$article->selection}}</td>
                            <td class="table-border">{{$article->couleur->nom}}</td>
                            <td class="table-border">{{$article->conditionnement->nom}}</td>
                            <td class="table-border">{{$article->categorie->nom}}</td>

                            <td><a href="{{route('articles.edit', $article->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('articles.show', $article->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('articles.destroy', $article->id)"></x-supprimer-btn >
                            </td>
                            <td></td>
                        </tr>
                        @endforeach

                        </ul>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>