@extends('layouts.default')

@section('content')
<div id="main">

	<section class="grid-container">

		<div class="grid-100 artist">

			<article>

				<h2>{{ $artist->firstname}} {{ $artist->lastname }} <span class="instruments">&#8212; {{ $artist->allInstruments() }}</span></h2>

			</article>

			<article>

				<div class="bio-image">
					<img src="/assets/img/artists/{{ $artist->slug }}.jpg">@if(! is_null($artist->photo_credit)) <span class="credit">&copy; {{ $artist->photo_credit }}</span> @endif
				</div>

				<div class="bio-info">

					<p class="bio-long">{{ $artist->bio_long }}</p>

					<ul>
						@if (! is_null($artist->website))
						<li>Website: <a href="http://{{ $artist->website }}">{{ $artist->website }}</a></li>
						@endif

						@if (! is_null($artist->facebook))
						<li>Facebook: <a href="{{ $artist->facebook }}">{{ $artist->facebook }}</a></li>
						@endif

						@if (! is_null($artist->twitter))
						<li>Twitter: <a href="{{ $artist->twitter }}">{{ $artist->twitter }}</a></li>
						@endif

						@if (! is_null($artist->itunes))
						<li>iTunes: <a href="{{ $artist->itunes }}">{{ $artist->itunes }}</a></li>
						@endif

						@if (! is_null($artist->amazon))
						<li>Amazon: <a href="{{ $artist->amazon }}">{{ $artist->amazon }}</a></li>
						@endif

						@if (! is_null($artist->cdbaby))
						<li>CDBaby: <a href="{{ $artist->cdbaby }}">{{ $artist->cdbaby }}</a></li>
						@endif

						@if (! is_null($artist->bandcamp))
						<li>Bandcamp: <a href="{{ $artist->bandcamp }}">{{ $artist->bandcamp }}</a></li>
						@endif
					</ul>

				</div>

			</article>

		</div>

	</section>

</div>
@stop