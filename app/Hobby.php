<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
	protected $primaryKey = 'id';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hobby_name', 'age_first_started', 'created_at', 'updated_at', 'created_by', 'updated_by'
    ];

}
