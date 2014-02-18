@extends('layouts.default')

@section('content')
<div id="main">
	<section class="grid-container">
		<div class="grid-100">
			<article>
				<h2>{{ $faq->question }}</h2>
				<p class="answer_shown">{{ $faq->answer }}</p>
			</article>
		</div>
	</section>
</div>
@stop