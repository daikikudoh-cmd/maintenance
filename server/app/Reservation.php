<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 
    'reservation_type', 
    'date', 
    'time', 
    'store', 
    'loaner_car', 
    'parking', 
    'in_charge', 
    'in_charge_tell', 
    'request',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
