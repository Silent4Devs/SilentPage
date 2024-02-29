<?php

namespace App\Http\Livewire\Admin;

use App\Models\SolicitudesPostulacion;
use Livewire\Component;
use Livewire\WithPagination;

class SolicitantesdatatableComponent extends Component
{
    use WithPagination;

    public $search = '';

    public $loading = false;

    public function render()
    {
        $this->loading = true;

        $solicitudes = SolicitudesPostulacion::where('nombre', 'like', '%'.$this->search.'%')
            ->orWhere('email', 'like', '%'.$this->search.'%')
            ->orWhere('telefono', 'like', '%'.$this->search.'%')
            ->paginate(10);

        $this->loading = false;

        return view('livewire.admin.solicitantesdatatable-component', compact('solicitudes'));
    }

    public function export($path)
    {
        return response()->download(storage_path('app/public/'.$path));
    }
}
