<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Mail\Newsletter;
use Illuminate\Support\Facades\Mail;

class ContactoFooterFormComponent extends Component
{
    use LivewireAlert;

    public $email;

    protected $rules = [
        'email' => 'required|email|max:255',
    ];

    public function render()
    {
        return view('livewire.contacto-footer-form-component');
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        try {

            //Datos del correo
            $correo = $validatedData['email'];

            Mail::to('cesar.borre@silent4business.com')->send(new Newsletter($correo));


            $this->alert('success', 'Suscrito correctamente.');
        } catch (\Exception $e) {
            $this->alert('error', 'Intente nuevamente más tarde.');
        }

        $this->reset();
    }
}
