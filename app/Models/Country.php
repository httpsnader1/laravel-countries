<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected array $translatable = [
        'name',
    ];

    protected $fillable = [
        'name',
        'code',
        'iso',
    ];
}
