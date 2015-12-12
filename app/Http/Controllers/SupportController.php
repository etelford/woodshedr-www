<?php

namespace App\Http\Controllers;

use App\Faq;

class SupportController extends Controller
{
	public function index()
	{
		return redirect('contact');
	}

	public function faq($slug = null)
	{
		if (! $slug) {
			$faqs = Faq::get();

			return view('support-faq', compact('faqs'));
		} else {
			$faq = Faq::whereSlug($slug)->first();

			return view('support-faq-single', compact('faq'));
		}
	}

}