<?php

namespace App\Http\Livewire;

use App\Models\SolicitudesPostulacion;
use Illuminate\Contracts\Support\ValidatedData;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use App\Mail\Talento;
use Illuminate\Support\Facades\Mail;

class TalentoFormComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $tipo;
    public $nombre;
    public $email;
    public $telefono;
    public $laborando;
    public $cv;
    public $terminos;

    protected $rules = [
        'tipo' => 'required',
        'nombre' => 'required|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required|regex:/[0-9]{10,15}/',
        'laborando' => 'required',
        'cv' => 'required|mimes:pdf',
        'terminos' => 'required',
    ];

    public function render()
    {
        return view('livewire.talento-form-component');
    }

    public function submitForm()
    {
        $validatedData = $this->validate();

        try {
            DB::beginTransaction();
            // Upload CV file
            $cvPath = $this->cv->store('cv', 'public'); // Assuming you want to store the CV in the "public" disk and "cv" directory

            // Save data to the database
            $talent = SolicitudesPostulacion::create(array_merge($validatedData, ['cv' => $cvPath]));

            $talent->save();

            //Datos del correo

            Mail::to('cesar.borre@silent4business.com')->send(new Talento($talent));

            $this->alert('success', 'Nuevo Talento');
        } catch (\Exception $e) {
            DB::rollback();
            $this->alert('error', 'Intente nuevamente más tarde.');
        }

        $this->reset();
    }
}
