<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $fillable ([
        'name', 'numTome', 'description',
    ]);
}
