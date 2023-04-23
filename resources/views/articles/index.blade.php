<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all articles')}}</h1>

                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Couleur</th>
                            <th>Conditionnement</th>
                            <th>Categorie</th>
                            <th>Action</th>
                            <th><a href="{{route('articles.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($articles as $article)
                        <tr>

                            <td>{{$article->id}}</td>
                            <td>{{$article->nom}}</td>
                            <td>{{$article->couleur->nom}}</td>
                            <td>{{$article->conditionnement->nom}}</td>
                            <td>{{$article->categorie->nom}}</td>

                            <td><a href="{{route('articles.edit', $article->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('articles.show', $article->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('articles.destroy', $article->id)"></x-supprimer-btn >
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