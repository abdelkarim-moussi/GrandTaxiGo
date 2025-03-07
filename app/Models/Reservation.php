<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];


    public function driver(){
        return $this->belongsTo(Driver::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
