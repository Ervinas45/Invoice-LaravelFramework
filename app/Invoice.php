<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at','invoiced_at','updated_at','created_at'];
    protected $fillable = [
        'invoiced_at', 'issued_by', 'received_by','comment',
    ];
    protected $table = 'users';

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
    public function type()
    {
    	return $this->belongsTo('App\Type');
    }
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
