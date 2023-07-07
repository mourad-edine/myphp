<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prof extends Model
{
    protected $fillable = ['nom','email','numero','prix','adress'];
    use HasFactory;

    public function clients(){
        return $this->belongsToMany(Client::class)->withPivot('reservation','payement')->withTimestamps();
    }


}
