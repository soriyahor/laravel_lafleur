<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1>{{__('List of all categories')}}</h1>

                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Catégorie</th>
                            <th>Action</th>
                            <th><a href="{{route('categories.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($categories as $categorie)
                        <tr>

                            <td>{{$categorie->id}}</td>
                            <td>{{$categorie->libelle}}</td>
                            <td><a href="{{route('categories.edit', $categorie->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('categories.show', $categorie->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('categories.destroy', $categorie->id)"></x-supprimer-btn >
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