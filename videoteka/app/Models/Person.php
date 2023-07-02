<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    //polja u tabeli, dodato
    protected $fillable = ['id', 'name', 'surname', 'b_date'];

}
