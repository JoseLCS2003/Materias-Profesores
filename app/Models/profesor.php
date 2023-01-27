<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    use HasFactory;
    protected $table='profesores';
    protected $fillable =['nombre','apPaterno','apMaterno','telefono','correo','materia'];
    public function materias()
    {
        return $this->belongsTo(materia::class);
    }
}
