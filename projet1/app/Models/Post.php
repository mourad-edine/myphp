<?php

namespace App\Models;

use App\Models\coach;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['nom','adress','email'];


    public function coachs(){
        return $this->belongsToMany(coach::class);
    }
}
