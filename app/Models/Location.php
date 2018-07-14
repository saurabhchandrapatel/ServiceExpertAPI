<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model 
{

	protected $table = 'location';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id','city','state', 'latitude', 'longitude' , 'country' ,'status'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}