<?php namespace App\Models;

class Artist extends \Eloquent {

	protected $table = 'artists';

	public function instruments() {
		return $this->belongsToMany('App\Models\Instrument');
	}

}