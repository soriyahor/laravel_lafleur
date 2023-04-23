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

                    <h1>{{__('List of all commandes client')}}</h1>

                    <table class="border ">
                        <thead>
                            <th>Id</th>
                            <th>date_commande</th>
                            <th>etat_commande</th>

                            <th>nom client</th>
                            <th>prenom client</th>
                            <th>mail client</th>
                            <th>tél client</th>

                            <th>date livraison</th>
                            <th>etat livraison</th>

                            <th>Action</th>
                        </thead>

                        @foreach($commandesClient as $commandeClient)
                        <tr class="odd:bg-gray-100">

                            <td class="table-border">{{$commandeClient->id}}</td>
                            <td class="table-border">{{$commandeClient->date_commande}}</td>
                            <td class="table-border">{{$commandeClient->etat_commande}}</td>

                            <td class="table-border">{{$commandeClient->client->nom}}</td>
                            <td class="table-border">{{$commandeClient->client->prenom}}</td>
                            <td class="table-border">{{$commandeClient->client->mail}}</td>
                            <td class="table-border">{{$commandeClient->client->tel}}</td>

                            <td class="table-border">{{$commandeClient->livraison->date_livraison}}</td>
                            <td class="table-border">{{$commandeClient->livraison->etat_livraison}}</td>


                            <td><a href="{{route('commandes_client.edit', $commandeClient->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('commandes_client.show', $commandeClient->id)}}"><x-voir-btn></x-voir-btn></a>
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