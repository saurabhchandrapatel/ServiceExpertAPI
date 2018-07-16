<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model 
{


    use SoftDeletes;

	protected $table = 'preference';

	/**
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];

    /**
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['deleted_at'];

}