<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PHPMailer\PHPMailer\PHPMailer;
use Jantinnerezo\LivewireAlert\LivewireAlert;

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
            //**Configuracion de smtp del correo */
            $phpmailer = new PHPMailer(true);
            $phpmailer->CharSet = 'UTF-8';
            $phpmailer->SMTPDebug = 3;
            $phpmailer->isSMTP();
            $phpmailer->Host = "smtp.office365.com";
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = "s4b.website@silent4business.com";
            $phpmailer->Password = "zmpsrmvqqlqksfst";
            $phpmailer->SMTPSecure = "TLS";
            $phpmailer->Port = 587;

            //Datos del correo
            $nombre = $validatedData['nombre'];
            $correo = $validatedData['email'];
            $telefono = $validatedData['telefono'];
            $mensaje = $validatedData['mensaje'];

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
                        Silent4business <br> <small style="font-weight: lighter; font-size:17px; color: #696969;"> Contacto general </small>
                    </h1>
                    <p style="margin-top: 60px;">Nombre: <strong> $nombre </strong></p>
                    <p>Correo electrónico: <strong> $correo </strong> </p>
                    <p>Teléfono: <strong> $telefono </strong></p>
                    <p>Mensaje: <strong> $mensaje </strong></p>
                </div>
            HTML;

            //Datos del correo remitente, destinatario, asunto.
            $phpmailer->setFrom('s4b.website@silent4business.com', 'S4B Website');
            $phpmailer->addAddress('gestiondetalento@silent4business.com', 'Destinatario');
            $phpmailer->addAddress('s4b.website@gmail.com', 'Destinatario');
            $phpmailer->Subject = "Website Área Comercial";
            $phpmailer->msgHTML($body);
            $phpmailer->send();

            $this->alert('success', 'Información enviada correctamente.');
        } catch (\Exception $e) {
            $this->alert('error', 'Intente nuevamente.');
        }

        $this->reset();
    }
}
