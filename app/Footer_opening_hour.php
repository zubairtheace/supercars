<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer_opening_hour extends Model
{

    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'week_day','week_time','week_end_day','week_end_time'
    ];

    protected $dates = ['deleted_at'];

}
