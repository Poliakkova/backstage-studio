<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public function clients() {
        return $this->belongsToMany('App\Models\Client');
    }

    public function works() {
        return $this->hasMany('App\Models\Work');
    }
}
