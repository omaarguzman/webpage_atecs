<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $correo
 * @property string $usuario
 * @property string $password
 * @property string $updated_at
 * @property string $created_at
 * @property integer $activo
 * @property boolean $editable
 * @property string $imagen
 * @property Post[] $posts
 * @property Banner[] $banners
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuario';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'correo', 'usuario', 'password', 'updated_at', 'created_at', 'activo', 'editable', 'imagen'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'id_usuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function banners()
    {
        return $this->hasMany('App\Models\Banner', 'id_usuario');
    }
}
