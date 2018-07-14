<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model 
{

  /**
     *
     * @var array
     */
    protected $fillable = [
           'id',
          'uid',  
          'pid'  ,
          'radius'  ,
          'rating'  ,
          'type'  ,
          'comment'  ,
          'parent_id'  ,
          'updated'  ,
          'status'  ,
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}
  

