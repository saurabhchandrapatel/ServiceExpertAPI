<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model 
{
	protected $table = 'orders';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id','uid','aid', 'scheduled', 'amount' , 'tax' , 'status' , 'payment_id'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}