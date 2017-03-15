<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Filial extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'whatsapp',
        'email'
    ];

}