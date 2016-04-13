<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
	public function index()
	{
		return redirect('https://itunes.apple.com/us/app/woodshedr-jazz-play-alongs/id698750057?mt=8');
	}

}