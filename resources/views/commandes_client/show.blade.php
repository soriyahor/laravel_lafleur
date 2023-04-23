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
                            <p>date_commande : {{$commandeClient->date_commande}}<br>
                            etat_commmande :  {{$commandeClient->etat_commande}}
                            <br>
                            date_livraison : {{$commandeClient->livraison->date_livraison}}<br>
                            etat_livraison : {{$commandeClient->livraison->etat_livraison}}<br>

                            Total de la commande : {{$total}} euros<br>
                            <br>
                            nom : {{$commandeClient->client->nom}}<br>
                            prenom : {{$commandeClient->client->prenom}}<br>
                            </p>

                            <table class="border ">
                                <thead>
                                    <th>nom_article</th>
                                    <th>conditionnement</th>
                                    <th>couleur</th>
                                    <th>categorie</th>
                                    <th>quantite</th>
                                    <th>prix</th>
                                </thead>
                                @foreach($lignesCommandeClient as $ligneCommandeClient)
                                <tr class="odd:bg-gray-100">
                                    <td class="table-border">{{$ligneCommandeClient->article->nom}}</td>
                                    <td class="table-border">{{$ligneCommandeClient->article->conditionnement->nom}}</td>
                                    <td class="table-border">{{$ligneCommandeClient->article->couleur->nom}}</td>
                                    <td class="table-border">{{$ligneCommandeClient->article->categorie->nom}}</td>

                                    <td class="table-border">{{$ligneCommandeClient->quantite}}</td>
                                    <td class="table-border">{{$ligneCommandeClient->prix}}</td>
                                </tr>
                                @endforeach
                                </ul>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>