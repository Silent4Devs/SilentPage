<?php

namespace App\Http\Livewire;

use App\Mail\Curso;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ContactoCursoCapacitacionFormComponent extends Component
{
    use LivewireAlert;

    public $nombre;

    public $email;

    public $telefono;

    public $mensaje;

    public $organizacion;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required',
        'mensaje' => 'required|string|max:255',
        'organizacion' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.contacto-curso-capacitacion-form-component');
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        try {

            Mail::to('cesar.borre@silent4business.com')->send(new Curso($validatedData));

            $this->alert('success', 'Información enviada correctamente.');
        } catch (\Exception $e) {
            $this->alert('error', 'Intente nuevamente.');
            dd($e);
        }

        $this->reset();
    }
}
