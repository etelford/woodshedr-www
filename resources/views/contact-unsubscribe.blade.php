@extends('layouts.default')

@section('content')
<div id="main">

	<section class="grid-container privacy">

		<div class="grid-100">

			<article>
				<h2>Unsubscribe</h2>

				<p>Let&#8217;s make this easy!</p>

				<form method="POST" action="http://campaigns.hwy1design.com/t/r/u/ticdtk/" id="subForm">

					<div id="contact">
						<input type="email" placeholder="email" name="cm-ticdtk-ticdtk" class="email"> <button type="submit">Unsubscribe</button>
					</div>

				</form>

			</article>

		</div>

	</section>

</div>
@stop