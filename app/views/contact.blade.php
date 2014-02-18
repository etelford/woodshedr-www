@extends('layouts.default')

@section('content')
<div id="main">
	<section class="grid-container">
		<div class="grid-100">
			<article>
				<h2>Twitter</h2>
				<p>You can follow Woodshedr on Twitter at <a href="https://twitter.com/woodshedr">@woodshedr</a>.</p>
			</article>

			<!--<article>
				<h2>Facebook</h2>
				<p>Please visit and like the <a href="#">Woodshedr page</a> on Facebook.</p>
			</article>-->

			<article>
				<h2>Newsletter</h2>
				<p>Sign up for the Woodshedr newsletter to find out when we add new songs or introduce new features! It&#8217;s also easy to <a href="/contact/unsubscribe">unsubscribe</a>.</p>
				{{ Form::open(array('url' => 'http://campaigns.hwy1design.com/t/r/s/ticdtk/', 'id' => 'frm_notify')) }}
				<div id="contact">
					{{ Form::text('email', null, array(
						'class' => 'email', 
						'name' => 'cm-ticdtk-ticdtk', 
						'type' => 'email',
						'id' => 'email',
						'placeholder' => 'email'
						)
					) }}
					 {{ Form::button('Subscribe', array('type' => 'submit')) }}

					<p class="small">*Your email address is safe. We will <u>never</u> contact for purposes other than to let you know about Woodshedr news.</p>
				</div>
				{{ Form::close() }}
			</article>

			<?php /*
			<article>
				<h2>Want to Be a Woodshedr Composer?</h2>
				<p>We&#8217;re always looking for new composers to showcase in Woodshedr. You can tell us a little about yourself on the <a href="/composers/join">Composer Submission</a> page. Composers on Woodshedr receive a royalty for each song of theirs sold.</p>
			</article>
			*/ ?>

			<article>
				<h2>Support</h2>
				<p>Have a problem or question? We&#8217;re happy to help, but you should check out the <a href="/support/faq">Frequently Asked Questions</a> first.</p>
			</article>

			<article>
				<h2>Legal</h2>
				<p>Check out our <a href="/privacy">Privacy Policy</a>.</p>
			</article>
		</div>
	</section>
</div>
@stop