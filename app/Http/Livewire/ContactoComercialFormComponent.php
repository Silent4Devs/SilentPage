<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Mail\Comercial;
use Illuminate\Support\Facades\Mail;

class ContactoComercialFormComponent extends Component
{
    use LivewireAlert;

    public $nombre;
    public $email;
    public $telefono;
    public $mensaje;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required',
        'mensaje' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.contacto-comercial-form-component');
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        try {

            Mail::to('benito.lopez.tecno@gmail.com')->send(new Comercial($validatedData));

            $this->alert('success', 'Información enviada correctamente.');
        } catch (\Exception $e) {
            $this->alert('error', 'Intente nuevamente.');
        }

        $this->reset();
    }
}
