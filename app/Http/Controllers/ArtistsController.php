<?php

namespace App\Http\Controllers;

use App\Models\Artist;

class ArtistsController extends Controller
{
	public function index($slug = null)
	{
		if (! $slug) {
			$artists = Artist::with('instruments')
							 ->orderBy('lastname')
							 ->where('visible', 1)
							 ->get();

			return view('artists', compact('artists'));
		} else {
			$artist = Artist::with('instruments')
							->where('slug', '=', $slug)
							->where('visible', 1)
							->first();

			if (is_null($artist)) {
				return redirect('/');
			}

			return view('artist-single', compact('artist'));
		}
	}
}