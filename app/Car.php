<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
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

  public function color(){
    return $this->hasOne('App\Color', 'id');
  }

  public function make(){
    return $this->hasOne('App\Make', 'id', 'make_id');
  }
}
