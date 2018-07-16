<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model 
{

    use SoftDeletes;

	protected $table = 'categories';


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


    protected $dates = ['deleted_at'];
} 
