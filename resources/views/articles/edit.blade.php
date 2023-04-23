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
                    <form action="{{route('articles.update', $articles->id)}}" method="POST">
                        @method ('PUT') @csrf
                        <label>Quantité en stock</label>
                        <input type="text" name="quantite_stock" id="quantite_stock" value="{{$articles->quantite_stock}}">
                        @error('nom')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                        <input type="submit" value="envoyer" class="btn-blue">
                        <input type="reset" value="annuler" class="btn-white">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>