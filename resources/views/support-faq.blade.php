@extends('layouts.default')

@section('content')
<div id="main">

	<section class="grid-container">

		<div class="grid-100">

			<article>

				<h2>Frequently Asked Questions</h2>

				<ul class="faq">
					@foreach ($faqs as $faq)

					<li>
						<p class="question"><a href="/support/faq/{{ $faq->slug }}">{{ $faq->question }}</a></p>

						<p class="answer">{{ $faq->answer }}</p>
					</li>

					@endforeach
				</ul>

			</article>

		</div>

	</section>

</div>
@stop