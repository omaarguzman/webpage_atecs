<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_usuario
 * @property string $titulo
 * @property string $descripcion
 * @property string $img
 * @property string $contenido
 * @property \Date $fecha_inicio
 * @property \Date $fecha_fin
 * @property \DateTime $updated_at
 * @property \DateTime $created_at
 * @property integer $activo
 * @property Usuario $usuario
 */
class Post extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'post';

    /**
     * @var array
     */
    protected $fillable = ['id_usuario', 'titulo', 'descripcion', 'img', 'contenido', 'fecha_inicio', 'fecha_fin', 'updated_at', 'created_at', 'activo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
}