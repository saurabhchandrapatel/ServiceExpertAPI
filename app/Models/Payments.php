<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model 
{


    use SoftDeletes;

	protected $table = 'payments';

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