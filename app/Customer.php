<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at','updated_at','created_at'];

   	protected $fillable = [
        'name', 'company_code', 'vat_code','address',
    ];

    protected $table = 'customers';

    public function invoice()
    {
    	return $this->hasMany('App\Invoice');
    }
}
