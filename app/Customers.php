<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use SoftDeletes;

   	protected $fillable = [
        'name', 'company_code', 'vat_code','address',
    ];

    protected $table = 'customers';
}
