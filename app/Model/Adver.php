<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adver extends Model
{
	protected $table = "lg_advertisement";
	public $timestamps = false;
	public $fillable = ["title", "content", "addate","displayType"];
}
