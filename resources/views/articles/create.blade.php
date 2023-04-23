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
                        <label>nom</label>
                        <input type="text" name="nom" id="nom">
                        <select name="categorie" id="categorie">
                            <option value="">--Choissisez la catégorie--</option>
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                            @endforeach
                        </select>
                        <select name="conditionnement" id="conditionnement">
                            <option value="">--Choissisez le conditionnement--</option>
                            @foreach($conditionnements as $conditionnement)
                            <option value="{{$conditionnement->id}}">{{$conditionnement->nom}}</option>
                            @endforeach
                        </select>
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