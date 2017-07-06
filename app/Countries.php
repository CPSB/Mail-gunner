<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Countries
 *
 * @package App
 */
class Countries extends Model
{
    /**
     * Mass-assign field.
     *
     * @var array
     */
    protected $fillable = ['short_name', 'long_name'];
}
