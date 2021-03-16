<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
	protected $table = "lg_goods";
	public $timestamps = false;
	public $fillable = [
		"typeid",
		"norms",
		"goodsname",
		"size",
		"installment",
		"prodate",
		"goodsprice",
		"vipprice",
		"photo",
		"introduction",
		"recommend",
		"newgoods"
	];
}
