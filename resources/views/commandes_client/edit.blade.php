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

                <p>etat_commande : {{$commandeClient->etat_commande}}</p>
                <p>etat_livraison : {{$etatLivraison}}</p>

                    <form action="{{route('commandes_client.update', $commandeClient->id)}}" method="POST">
                        @method ('PUT') @csrf                        
                        <select name="etatCommande" id="etatCommande">
                            <option value="{{$commandeClient->etat_commande}}">{{$commandeClient->etat_commande}}</option>
                            @foreach($etatsCommande as $etatCommande)
                            <option value="{{$etatCommande}}">{{$etatCommande}}</option>
                            @endforeach
                        </select>
                        <select name="etatLivraison" id="etatLivraison">
                            <option value="{{$etatLivraison}}">{{$etatLivraison}}</option>
                            @foreach($etatsLivraison as $etatLivraison)
                            <option value="{{$etatLivraison}}">{{$etatLivraison}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="envoyer" class="btn-blue">
                        <input type="reset" value="annuler" class="btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>