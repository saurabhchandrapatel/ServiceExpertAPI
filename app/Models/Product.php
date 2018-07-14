<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{

  /**
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'info',
        'pictures',
        'cid',
        'prid',
        'price',
        'max_delivery_time',
        'min_quantity',
        'max_quantity',
        'status',
        'instruction',
        'created',
        'updated'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}
  