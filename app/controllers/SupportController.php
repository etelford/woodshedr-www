<?php

class SupportController extends BaseController {

	public function index()
	{
		return Redirect::to('contact');
	}

	public function faq($slug = null)
	{
		if(!$slug) {
			$faqs = DB::table('faq')->get();
			return View::make('support-faq')->with('faqs', $faqs);
		} else {
			$faq = DB::table('faq')->where('slug', '=', $slug)->first();
			return View::make('support-faq-single')->with('faq', $faq);
		}
	}

}