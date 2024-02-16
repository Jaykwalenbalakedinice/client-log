<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'date',
        'firstname',
        'middlename',
        'lastname',
        'age',
        'sex',
        'homeaddress',
        'contact',
        'purpose',
        'officeconcerned',
        'timein'
    ];
}
