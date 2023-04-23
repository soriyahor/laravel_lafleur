<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails conditionnement') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                    <div class="overflow-hidden
                                shadow-sm
                                rounded-lg">

                        <div class="p-5
                                    text-black
                                    text-center
                                    md:text-left">
                            Nom du conditionnement : {{$conditionnements->nom}}
                           
                           
                        </div>
                        <a href="{{route('conditionnements.edit', $conditionnements->id)}}"><x-modifier-btn></x-modifier-btn></a>
                        <x-supprimer-btn :action="route('conditionnements.destroy', $conditionnements->id)"></x-supprimer-btn >
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>