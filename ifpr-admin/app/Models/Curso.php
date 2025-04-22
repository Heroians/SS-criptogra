<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'nivel_id', 'eixo_id'];

    public function nivel()
    {
        return $this->belongsTo(Nivel::class);
    }

    public function eixo()
    {
        return $this->belongsTo(Eixo::class);
    }

    public function componentes()
    {
        return $this->hasMany(Componente::class);
    }
}
