<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model 
{

    /**
     *
     * @var array
     */
    protected $fillable = [
        'id','oid','pid', 'quantity', 'amount' , 'tax'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}