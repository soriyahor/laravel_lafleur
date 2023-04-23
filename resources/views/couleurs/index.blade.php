<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all couleurs')}}</h1>

                    <table class="border">
                        <thead>
                            <th>Id</th>
                            <th>Couleur</th>
                            <th>Action</th>
                            <th><a href="{{route('couleurs.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($couleurs as $couleur)
                        <tr class="odd:bg-gray-100">
                            <td table-border>{{$couleur->id}}</td>
                            <td table-border>{{$couleur->nom}}</td>
                            <td><a href="{{route('couleurs.edit', $couleur->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('couleurs.show', $couleur->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('couleurs.destroy', $couleur->id)"></x-supprimer-btn >
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