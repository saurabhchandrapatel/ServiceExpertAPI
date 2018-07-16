<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model 
{


    use SoftDeletes;

	protected $table = 'pictures';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id' , 'type' , 'data'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

}