<?php namespace App\Models;

class Instrument extends \Eloquent {

	protected $table = 'instruments';
	public $timestamps = false;

	public function artists() {
		return $this->belongsToMany('App\Models\Artist', 'artist_instrument', 'instrument_id', 'artist_id');
	}

}