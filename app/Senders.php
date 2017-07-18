<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senders extends Model
{
    /**
     *  Mass-assign fields for the database table. 
     * 
     * @var array
     */
    protected $fillable = ['name', 'postal_code', 'email', 'city', 'country_id'];
}
