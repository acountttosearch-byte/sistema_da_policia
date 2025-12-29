<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'email_institucional',
        'numero_identificacao',
        'departamento',
        'patente',
        'cargo',
        'estado'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

