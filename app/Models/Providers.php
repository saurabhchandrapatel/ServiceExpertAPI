<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model 
{


    use SoftDeletes;

	protected $table = 'providers';

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

    protected $dates = ['deleted_at'];


}
  

