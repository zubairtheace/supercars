<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{

    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'question',
        'answer'
    ];

    protected $dates = ['deleted_at'];

}
