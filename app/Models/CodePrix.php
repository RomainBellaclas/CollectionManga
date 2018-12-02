<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodePrix extends Model
{
    protected $fillable = [
        'libellePrix', 'slug', 'prix'
    ];
}
