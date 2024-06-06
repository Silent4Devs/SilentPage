<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SolicitudesPostulacion
 *
 * @property int $id
 * @property string $tipo
 * @property string $nombre
 * @property string $email
 * @property string $telefono
 * @property string $laborando
 * @property string $cv
 * @property bool $terminos
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 */
class SolicitudesPostulacion extends Model
{
    use SoftDeletes;

    protected $table = 'solicitudes_postulacion';

    protected $casts = [
        'terminos' => 'bool',
    ];

    protected $fillable = [
        'tipo',
        'nombre',
        'email',
        'telefono',
        'laborando',
        'cv',
        'terminos',
    ];
}
