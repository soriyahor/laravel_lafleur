<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



                    <form action="{{route('tags.update', $tags->id)}}" method="POST">
                        @method ('PUT') @csrf
                        <label>Nom</label>
                        <input type="text" name="nom" id="nom" value="{{$tags->nom}}">
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