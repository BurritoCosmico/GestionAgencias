<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_agencia',
        'tipo_agencia',
        'ciudad',
        'estado',
        'pais',
        'nombre_cliente',
        'mail',
        'telefono',
        'agency',
        'fecha_compra',
        'modalidad',
        'monto_pago',
        'tipo_pago',
        'vendedor',
        'porcentaje',
    ];
}
