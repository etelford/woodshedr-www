<?php

class ContactController extends BaseController {

	public function index()
	{
		return View::make('contact');
	}

	public function subscribe()
	{
		return Redirect::to('contact');
	}

	public function subscribe_success()
	{
		return View::make('contact-subscribe-success');
	}

	public function unsubscribe()
	{
		return View::make('contact-unsubscribe');
	}

	public function unsubscribe_success()
	{
		return View::make('contact-unsubscribe-success');
	}

}