<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Indent extends Model
{
	protected $table = "lg_indent";
	public $timestamps = false;
	public $fillable = [
		"userid",
		"commodity",
		"quantity",
		"consignee",
		"sex",
		"address",
		"postcode",
		"telephone",
		"email",
		"express",
		"orderdate",
		"buyer",
		"state",
		"total"
	];
}
