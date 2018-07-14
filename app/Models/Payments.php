<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model 
{


	protected $table = 'payments';

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