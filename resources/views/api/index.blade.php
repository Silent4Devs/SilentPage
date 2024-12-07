<x-app-layout>
    <x-slot name="header">
        <span class="title-second font-semibold text-xl text-gray-800 leading-tight">
            {{ __('API Tokens') }}
        </span>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-app-layout>
