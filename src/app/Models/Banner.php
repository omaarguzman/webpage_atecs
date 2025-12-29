<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_usuario
 * @property string $titutlo
 * @property string $img
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $updated_at
 * @property string $created_at
 * @property integer $activo
 * @property Usuario $usuario
 */
class Banner extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'banner';

    /**
     * @var array
     */
    protected $fillable = ['id_usuario', 'titutlo', 'img', 'fecha_inicio', 'fecha_fin', 'updated_at', 'created_at', 'activo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}
