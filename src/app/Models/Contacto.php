<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_usuario
 * @property string $nombre
 * @property string $puesto
 * @property string $departamento
 * @property string $telefono
 * @property integer $extension
 * @property string $email
 * @property \Date $fecha_alta
 * @property \Date $fecha_baja
 * @property \DateTime $updated_at
 * @property \DateTime $created_at
 * @property integer $activo
 * @property Usuario $usuario
 */

class Contacto extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contacto';

    /**
     * @var array
     */
    protected $fillable = [
        'id_usuario', 
        'nombre', 
        'puesto', 
        'departamento',
        'telefono',
        'extension',
        'email',
        'fecha_alta', 
        'fecha_baja', 
        'updated_at', 
        'created_at', 
        'activo'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
