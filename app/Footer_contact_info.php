<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer_contact_info extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'phone_number','email'
    ];
}
