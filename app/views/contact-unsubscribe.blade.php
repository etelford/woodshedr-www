@extends('layouts.default')

@section('content')
<div id="main">
	<section class="grid-container privacy">
		<div class="grid-100">
			<article>
				<h2>Unsubscribe</h2>
				<p>Let&#8217;s make this easy!</p>
				{{ Form::open(array('url' => 'http://campaigns.hwy1design.com/t/r/u/ticdtk/', 'id' => 'frm_notify')) }}
				<div id="contact">
					{{ Form::text('email', null, array(
						'class' => 'email', 
						'name' => 'cm-ticdtk-ticdtk', 
						'type' => 'email',
						'id' => 'email',
						'placeholder' => 'email'
						)
					) }}
					 {{ Form::button('Unsubscribe', array('type' => 'submit')) }}
				</div>
				{{ Form::close() }}
			</article>
		</div>
	</section>
</div>
@stop