<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Componente extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'carga_horaria', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
