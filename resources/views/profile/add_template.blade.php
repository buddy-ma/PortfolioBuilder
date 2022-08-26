<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Template') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto">
        <livewire:add-template/>
    </div>

</x-app-layout>
