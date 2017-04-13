<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = [
        'make_id',
        'color_id',
        'model',
        'type',
        'year',
        'engine_capacity',
        'transmission',
        'mileage',
        'price',
        'picture'
    ];

    protected $dates = ['deleted_at'];

    public function color(){
        return $this->hasOne('App\Color', 'id');
    }

    public function make(){
        return $this->hasOne('App\Make', 'id', 'make_id');
    }
}
