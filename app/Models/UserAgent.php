<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAgent extends Model 
{
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
}
  

