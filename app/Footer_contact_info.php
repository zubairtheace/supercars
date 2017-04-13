<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer_contact_info extends Model
{

    use SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'phone_number','email'
    ];

    protected $dates = ['deleted_at'];

}
