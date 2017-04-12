<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'car_id',
        'user_id',
        'message'
    ];

    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function car(){
        return $this->hasOne('App\Car', 'id', 'car_id');
    }
}
