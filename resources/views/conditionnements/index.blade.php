<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conditionnements') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all conditionnements')}}</h1>

                    <table class="border">
                        <thead>
                            <th>Id</th>
                            <th>Conditionnement</th>
                            <th>Action</th>
                            <th><a href="{{route('conditionnements.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($conditionnements as $conditionnement)
                        <tr class="odd:bg-gray-100">
                            <td table-border>{{$conditionnement->id}}</td>
                            <td table-border>{{$conditionnement->nom}}</td>
                            <td><a href="{{route('conditionnements.edit', $conditionnement->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('conditionnements.show', $conditionnement->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('conditionnements.destroy', $conditionnement->id)"></x-supprimer-btn >
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