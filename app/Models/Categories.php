<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model 
{

    /**
     *
     * @var array
     */
    protected $fillable = [
        'id','name','info', 'parent_id', 'picture' , 'weight' ,'status'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [
    ];
} 
