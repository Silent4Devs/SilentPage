<div class="m-5 overflow-hidden border border-gray-200 rounded-lg shadow-md">
    <div class="w-full text-sm text-left text-gray-500 bg-white border-collapse">
        <input type="text" class="px-12 py-2 font-medium text-gray-900" placeholder="Search..."
            wire:model.debounce.100ms="search">
    </div>
    <table class="w-full text-sm text-left text-gray-500 bg-white border-collapse">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Laborando</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Telefono</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">CV</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha registro</th>
            </tr>
        </thead>
        <tbody class="border-t border-gray-100 divide-y divide-gray-100">
            @foreach ($solicitudes as $solicitud)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="relative w-10 h-10">
                            <img class="object-cover object-center w-full h-full rounded-full"
                                src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExcmFkM2ViZGtsN2x0OHcza2Exd2p0dGFqOW5yZW90cGlwb3gyeTFoaiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/5k5vZwRFZR5aZeniqb/giphy.gif"
                                alt="" />
                            <span
                                class="absolute bottom-0 right-0 w-2 h-2 bg-green-400 rounded-full ring ring-white"></span>
                        </div>
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{ $solicitud->nombre }}</div>
                            <div class="text-gray-400">{{ $solicitud->tipo }}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            {{ strtoupper($solicitud->laborando) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $solicitud->email }}</td>
                    <td class="px-6 py-4">{{ $solicitud->telefono }}</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button wire:click="export('{{ $solicitud->cv }}')" type="button"
                                class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold text-blue-600 rounded-full bg-blue-50">
                                Visualizar
                            </button>
                        </div>
                    </td>
                    <td class="px-6 py-4">{{ $solicitud->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
