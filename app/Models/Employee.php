<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id', 'name', 'lastname', 'gender', 'birth', 'document_number', 'doc_type', 'nationality',
        'country', 'city', 'street', 'number', 'neighborhood',
    ];
}
