<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy', 'manager_id', 'name', 'city',
        'neighborhood', 'street', 'number',
    ];
}
