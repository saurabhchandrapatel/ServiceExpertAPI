<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model 
{


	protected $table = 'preference';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}