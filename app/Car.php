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
}
