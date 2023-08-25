<?php

namespace App\Http\Livewire;

use App\Models\SolicitudesPostulacion;
use Illuminate\Contracts\Support\ValidatedData;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

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
            // Send email

            $mailer = new PHPMailer;

            //Configuracion del SMTP DEL mailer

            $mailer->SMTPDebug = 3;
            $mailer->isSMTP();
            $mailer->Host = "smtp.office365.com";
            $mailer->SMTPAuth = true;
            $mailer->Username = "s4b.website@silent4business.com";
            $mailer->Password = "zmpsrmvqqlqksfst";
            $mailer->SMTPSecure = "TLS";
            $mailer->Port = 587;

            //Datos del correo

            $nombre = $validatedData['nombre'];
            $puesto = $validatedData['tipo'];
            $telefono = $validatedData['telefono'];
            $correo = $validatedData['email'];
            $labora = $validatedData['laborando'];
            $terminos = $validatedData['terminos'];

            header('Content-type: text/html; charset=UTF-8');
            $body = <<<HTML
                <div style="width: 90%;
                        max-width: 450px;
                        padding: 60px 20px;
                        box-sizing: border-box;
                        border-left: 1px solid #f5f5f5;
                        border-right: 1px solid #f5f5f5;
                        border-top: 30px solid #2375A6;
                        border-bottom: 30px solid #2375A6;
                        font-family: 'Segoe UI Regular';
                        color: #696969;
                        background-color: #f5f5f5;
                        font-size: 14px;
                        margin: auto;">
                    <h1 style="width: 100%;
                                margin: 0;
                                margin-top: 0px;
                                font-size: 20px;
                                text-align: center;
                                color: #2375A6;">
                        Silent4business <br> <small style="font-weight: lighter; font-size:17px; color: #696969;"> Aporta tu Talento </small>
                    </h1>
                    <p style="margin-top: 60px;">Nombre: <strong> $nombre </strong></p>
                    <p>Estatus actual: <strong> $puesto </strong></p>
                    <p>Teléfono: <strong> $telefono </strong></p>
                    <p>Correo electrónico: <strong> $correo </strong> </p>
                    <p>Labora actualmente: <strong> $labora </strong></p>
                    <p>Acepta los terminos de privacidad: <strong> $terminos </strong></p>
                </div>
            HTML;

            //Datos del correo remitente, destinatario, asunto.

            $mailer->setFrom('s4b.website@silent4business.com', 'S4B Website');
            $mailer->addAddress('gestiondetalento@silent4business.com', 'Destinatario');
            $mailer->addAddress('s4b.website@gmail.com', 'Destinatario');
            $mailer->Subject = "Website Aporta tu Talento";
            $mailer->msgHTML($body);
            //comprobacion para el envio del archivo
            $mailer->addAttachment(public_path($cvPath));

            $mailer->send();

            DB::commit();

            $this->alert('success', 'Información enviada correctamente.');
        } catch (\Exception $e) {
            DB::rollback();
            $this->alert('error', 'Intente nuevamente.');
        }

        $this->reset();
    }
}
