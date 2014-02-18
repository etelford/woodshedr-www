@extends('layouts.default')

@section('content')
<div id="main">
	<section class="grid-container">
		<div class="grid-100 artist">
			<article>
				<?php $all_instruments = '';
				foreach($artist->instruments as $instrument) {
					$all_instruments .= $instrument->name . ', ';
				}
				?>
				<h2>{{ $artist->firstname . ' ' . $artist->lastname }} <span class="instruments">&#8212; {{ rtrim($all_instruments, ', ') }}</span></h2>
			</article>
			<article>
				<div class="bio-image">
					<img src="/assets/img/artists/{{ $artist->slug }}.jpg">@if(!is_null($artist->photo_credit)) <span class="credit">&copy; {{ $artist->photo_credit }}</span> @endif
				</div>
				<div class="bio-info">
					<p class="bio-long">{{ $artist->bio_long }}</p>
					<ul>
						@if(!is_null($artist->website))
						<li>Website: {{ HTML::link('http://' . $artist->website, $artist->website) }}</li>
						@endif

						@if(!is_null($artist->facebook))
						<li>Facebook: {{ HTML::link($artist->facebook, $artist->facebook) }}</li>
						@endif

						@if(!is_null($artist->twitter))
						<li>Twitter: {{ HTML::link($artist->twitter, $artist->twitter) }}</li>
						@endif

						@if(!is_null($artist->itunes))
						<li>iTunes: {{ HTML::link($artist->itunes, $artist->itunes) }}</li>
						@endif

						@if(!is_null($artist->amazon))
						<li>Amazon: {{ HTML::link($artist->amazon, $artist->amazon) }}</li>
						@endif

						@if(!is_null($artist->cdbaby))
						<li>CDBaby: {{ HTML::link($artist->cdbaby, $artist->cdbaby) }}</li>
						@endif

						@if(!is_null($artist->bandcamp))
						<li>Bandcamp: {{ HTML::link($artist->bandcamp, $artist->bandcamp) }}</li>
						@endif
					</ul>
				</div>
			</article>
		</div>
	</section>
</div>
@stop