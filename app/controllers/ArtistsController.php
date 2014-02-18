<?php

use App\Models\Artist;

class ArtistsController extends BaseController {

	public function index($slug = null)
	{
		if(!$slug) {
			$artists = Artist::with('instruments')->get();
			return View::make('artists')->with('artists', $artists);
		} else {
			$artist = Artist::with('instruments')->where('slug', '=', $slug)->first();
			return View::make('artist-single')->with('artist', $artist);
		}
	}

}