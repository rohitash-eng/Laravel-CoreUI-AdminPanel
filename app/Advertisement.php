<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'title',
        'address',        
        'goole_live_address',
		'created_at',
        'updated_at'
    ];
}
