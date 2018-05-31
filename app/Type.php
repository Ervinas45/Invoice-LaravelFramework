<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;
    protected $dates = ['deleted_at','updated_at','created_at'];
    protected $fillable = [
        'name'
    ];
    protected $table = 'types';

    public function invoice()
    {
    	return $this->hasMany('App\Invoice');
    }
}
