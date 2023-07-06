<?php

namespace App\Models;
use App\Models\Prof;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom','adress','email'];
    use HasFactory;

    public function profs(){
        return $this->belongsToMany(Prof::class)->withPivot('payement','reservation');
    }
}
