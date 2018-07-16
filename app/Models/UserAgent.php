<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAgent extends Model 
{


    use SoftDeletes;


	protected $table = 'user_agent';

	/**
     *
     * @var array
     */
    protected $fillable = [
           'id',
          'name'  ,
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];


}
  

