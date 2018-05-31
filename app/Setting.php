<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $dates = ['deleted_at','updated_at','created_at'];
    protected $fillable = [
        'value'
    ];
    protected $table = 'settings';

    public function scopeOfKey($query, $key)
    {
    	return $query->whereKey($key);
    }
}
