<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
	protected $table = "lg_collection";
	public $timestamps = false;
	public $fillable = ["sid", "goodsname", "goodsprice", "username", "photo"];
}
