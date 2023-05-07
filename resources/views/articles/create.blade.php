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
                    <form action="{{route('articles.store')}}" method="POST">
                        @csrf
                        <label>nom</label><br>
                        <input type="text" name="nom" id="nom"><br>
                        <label>photo</label><br>
                        <input type="text" name="photo"><br>
                        <label>prix</label><br>
                        <input type="text" name="prix" value="0"><br>
                        <label>quantite_stock</label><br>
                        <input type="number" name="quantite_stock" value="0"><br>
                        <label>selection</label>
                        <div>
                            <input type="radio" name="selection" value="1" checked>
                            <label for="huey">Oui</label>
                        </div>

                        <div>
                            <input type="radio" name="selection" value="0">
                            <label for="dewey">Non</label>
                        </div><br>
                        <select name="categorie" id="categorie"><br>
                            <option value="">--Choissisez la catégorie--</option>
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                            @endforeach
                        </select><br>
                        <select name="conditionnement" id="conditionnement">
                            <option value="">--Choissisez le conditionnement--</option>
                            @foreach($conditionnements as $conditionnement)
                            <option value="{{$conditionnement->id}}">{{$conditionnement->nom}}</option>
                            @endforeach
                        </select><br>
                        <select name="couleur" id="couleur">
                            <option value="">--Choissisez la couleur--</option>
                            @foreach($couleurs as $couleur)
                            <option value="{{$couleur->id}}">{{$couleur->nom}}</option>
                            @endforeach
                        </select>
                        <br><br>
                        <input type="submit" value="envoyer" class="btn-blue">
                        <input type="reset" value="annuler" class="btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>