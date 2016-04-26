@extends('layouts.default')

@section('content')
<div id="main">
	<section class="grid-container">

		<div class="grid-100">

			<article>

				<h2>Twitter</h2>

				<p>You can follow Woodshedr on Twitter at <a href="https://twitter.com/woodshedr">@woodshedr</a>.</p>

			</article>

			<article>

				<h2>Newsletter</h2>

				<p>Sign up for the Woodshedr newsletter to find out when new songs or features are added! It&#8217;s also easy to <a href="/contact/unsubscribe">unsubscribe</a>.</p>

				<form method="POST" action="http://campaigns.hwy1design.com/t/r/s/ticdtk/" id="subForm">

					<div id="contact">
						<input type="email" placeholder="email" name="cm-ticdtk-ticdtk" class="email"> <button type="submit">Subscribe</button>

						<p class="small">*Your email address is safe. We will <u>never</u> contact for purposes other than to let you know about Woodshedr news.</p>
					</div>

				</form>

			</article>

			<article>
				<h2>Support</h2>
				<p>Have a problem or question? I&#8217;m happy to help, but you should check out the <a href="/support/faq">Frequently Asked Questions</a> first.</p>
			</article>

			<article>
				<h2>Legal</h2>
				<p>Check out our <a href="/privacy">Privacy Policy</a>.</p>
			</article>
		</div>
	</section>
</div>
@stop