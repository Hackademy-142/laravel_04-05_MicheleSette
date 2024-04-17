<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    // si dichiara una propiretà che definisce i campi del modello e si dichiara protected
    protected $fillable = 
    [
        'username',
        'email',
        'message'
    ];
}
