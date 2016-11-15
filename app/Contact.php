<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'address','hutech', 'company', 'phone', 'group_id', 'photo'
    ];

    public function contacts()
    {
    	return $this->belongsTo('App\Group');
    }
   
}
