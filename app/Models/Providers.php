<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model 
{

  /**
     *
     * @var array
     */
    protected $fillable = [
           'id',
          'name',  
          'location'  ,
          'radius'  ,
          'address'  ,
          'logo'  ,
          'picture'  ,
          'created'  ,
          'updated'  ,
          'status'  ,
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];
}
  

