<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{ 
    protected $fillable = ['nom_materiel','description','genre','class'];
    use HasFactory;
}
