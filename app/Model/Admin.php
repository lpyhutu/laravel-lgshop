<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table = "lg_admin";
	public $timestamps = false;
	public $fillable = ["name", "password"];
}
