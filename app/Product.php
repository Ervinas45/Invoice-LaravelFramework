<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at','updated_at','created_at'];
	protected $fillable = [
		'name', 'quantity', 'unit','price','discount','vat'
	];
	protected $table = 'products';

	public function invoice()
	{
		return $this->belongsTo('App\Invoice');
	}
}
