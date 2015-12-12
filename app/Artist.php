<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
	public function instruments()
	{
		return $this->belongsToMany('App\Models\Instrument');
	}

	public function allInstruments()
	{
		return implode(', ', array_flatten($this->instruments->lists('name')));
	}
}