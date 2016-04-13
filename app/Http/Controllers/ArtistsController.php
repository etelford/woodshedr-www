<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class ArtistsController extends Controller
{
	public function index($slug = null)
	{
		if (! $slug) {
			$artists = Artist::with('instruments')->get();

			return view('artists', compact('artists'));
		} else {
			$artist = Artist::with('instruments')->where('slug', '=', $slug)->first();

			return view('artist-single', compact('artist'));
		}
	}
}