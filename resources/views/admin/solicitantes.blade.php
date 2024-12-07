<x-app-layout>
    <x-slot name="header">
        <span class="title-second text-xl font-semibold leading-tight text-gray-800">
            {{ __('Solicitantes') }}
        </span>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @livewire('admin.solicitantesdatatable-component')
            </div>
        </div>
    </div>
</x-app-layout>
