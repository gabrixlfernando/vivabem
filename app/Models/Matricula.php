<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $table = 'tblmatriculas';
    protected $primaryKey = 'idMatricula';

    protected $fillable = [
        'dataInicioMatricula',
        'statusMatricula',
        'idAluno',
        'idPlano',
    ];


    // Relacionamento com Aluno
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'idAluno');
    }

    // Relacionamento com Plano
    public function plano()
    {
        return $this->belongsTo(Plano::class, 'idPlano');
    }
}
