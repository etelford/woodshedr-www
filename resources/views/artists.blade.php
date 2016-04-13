@extends('layouts.default')

@section('content')
<div id="main">

	<section class="grid-container">

		<div class="grid-100">

			<article>
				<h2>Artists</h2>
				<p>We&#8217;ve assembled a roster of some of the best jazz musicians around. Every Woodshedr session is recorded live so the artists can play true to the spontaneous nature of this music.</p>
			</article>

		</div>

		@foreach($artists as $index => $artist)

		@if($index % 2 == 0)
			<div class="grid-100 grid-parent">
		@endif

		<div class="grid-50 artist">

			<article>

				<div class="bio-image">
					<img src="/assets/img/artists/{{ $artist->slug }}-thumb.jpg">@if(!is_null($artist->photo_credit)) <span class="credit">&copy; {{ $artist->photo_credit }}</span> @endif
				</div>

				<div class="bio-info">

					<h3 class="name"><a href="/artists/{{ $artist->slug }}">{{ $artist->firstname }} {{ $artist->lastname }}</a></h3>

					<p class="instruments">{{ $artist->allInstruments() }}</p>

					<p class="bio-short">{{ $artist->bio_short }} <a href="/artists/{{ $artist->slug }}">(full bio)</a></p>

				</div>

			</article>

		</div>
		@if($index % 2 == 1)
			</div>
		@endif
		@endforeach
	</section>

</div>
@stop