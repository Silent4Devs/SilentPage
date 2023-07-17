<div>
    <div class="card">
        <div class="card-header">
            <input type="text" class="form-control" placeholder="Search..." wire:model.debounce.500ms="search">
        </div>
        <div class="card-body">
            @if ($loading)
                <div class="flex items-center justify-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            @else
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Laborando</th>
                            <th>CV</th>
                            <th>Terminos</th>
                            <th>Fecha de Creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitudes as $solicitud)
                            <tr>
                                <td>{{ $solicitud->id }}</td>
                                <td>{{ $solicitud->tipo }}</td>
                                <td>{{ $solicitud->nombre }}</td>
                                <td>{{ $solicitud->email }}</td>
                                <td>{{ $solicitud->telefono }}</td>
                                <td>{{ $solicitud->laborando }}</td>
                                <td>{{ $solicitud->cv }}</td>
                                <td>{{ $solicitud->terminos }}</td>
                                <td>{{ $solicitud->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $solicitudes->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
