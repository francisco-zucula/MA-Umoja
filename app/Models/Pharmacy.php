<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'technical_director',
        'nuit',
        'permit',
        'name',
        'phone',
        'email',
        'city',
        'neighborhood',
        'street',
        'number',
    ];
}
