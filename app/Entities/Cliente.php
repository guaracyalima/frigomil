<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'link',
        'path',
        'status'
    ];

}
