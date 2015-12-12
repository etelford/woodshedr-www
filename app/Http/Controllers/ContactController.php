<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact');
	}

	public function subscribe()
	{
		return redirect('contact');
	}

	public function subscribe_success()
	{
		return view('contact-subscribe-success');
	}

	public function unsubscribe()
	{
		return view('contact-unsubscribe');
	}

	public function unsubscribe_success()
	{
		return view('contact-unsubscribe-success');
	}

}