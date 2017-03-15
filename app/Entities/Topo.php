<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Topo extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'titulo',
        'descricao',
        'imagem'
    ];

}
