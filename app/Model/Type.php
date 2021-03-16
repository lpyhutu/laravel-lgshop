<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $table = "lg_type";
	public $timestamps = false;
	public $fillable = ["typename", "typedes","displayType"];
}
