<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
	protected $table = "lg_user";
	public $timestamps = false;
	public $fillable = ["username", "password", "email", "address", "telephone", "regdate"];
}
