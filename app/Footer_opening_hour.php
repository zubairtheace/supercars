<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer_opening_hour extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'week_day','week_time','week_end_day','week_end_time'
    ];

}
