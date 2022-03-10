<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = [
        'first_name',
        'second_name',
        'last_name',
        'surname',
        'sex',
        'citizenship_type',
        'citizenship_card',
        'birth_date',
        'phone',
        'cellular',
        'email',
        'address',
        'status'
    ];
}
