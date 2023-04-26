<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
        
    </x-slot>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <br>

                    @if ($countArticles > 0)
                    Attention, Voici la liste des articles qui sont bientôt en rupture de stock ! <br><br>

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

                            <td></td>
                        </tr>
                        @endforeach

                        </ul>
                    </table>
                    @else
                    C'est ici que s'affiche vos alertes !
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
