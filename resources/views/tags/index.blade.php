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

                    <h1>{{__('List of all tags')}}</h1>

                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Action</th>
                            <th><a href="{{route('tags.create')}}"><x-creer-btn></x-creer-btn></a></th>
                        </thead>

                        @foreach($tags as $tag)
                        <tr>

                            <td>{{$tag->id}}</td>
                            <td>{{$tag->nom}}</td>
                            <td><a href="{{route('tags.edit', $tag->id)}}"><x-modifier-btn></x-modifier-btn></a>
                                <a href="{{route('tags.show', $tag->id)}}"><x-voir-btn></x-voir-btn></a>
                                <x-supprimer-btn :action="route('tags.destroy', $tag->id)"></x-supprimer-btn >
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