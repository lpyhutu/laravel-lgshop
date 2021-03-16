<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	protected $table = "lg_car";
	public $timestamps = false;
	public $fillable = ["sid", "username", "goodsname", "goodsprice", "num", "photo", "pCont", "sCont"];
}
