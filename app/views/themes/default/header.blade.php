<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">-->
<title>Woodshedr</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
	<link href="/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	<link href="/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	{{ HTML::style('assets/css/base.css'); }}
	{{ HTML::style('assets/css/woodshedr.css'); }}

</head>

<body class="{{ $body_class or 'home' }}">

<header>
	<div class="grid-container">
		<div class="grid-40">
			<h1><a href="/">{{ HTML::image('assets/img/logo-woodshedr-white.png', 'Woodshedr', array('width' => 304, 'height' => 51)) }}</a></h1>
			<h2 class="tagline">Jazz Play-alongs for the Modern Musician</h2>
		</div>
		<nav class="grid-60">
			<ul>
				@if(Request::is('artists*'))
				<li class="current">{{ HTML::link('artists', 'Artists') }}</li>
				@else
				<li>{{ HTML::link('artists', 'Artists') }}</li>
				@endif

				@if(Request::is('support/faq*'))
				<li class="current">{{ HTML::link('support/faq', 'FAQ') }}</li>
				@else
				<li>{{ HTML::link('support/faq', 'FAQ') }}</li>
				@endif
				
				@if(Request::is('contact*'))
				<li class="current">{{ HTML::link('contact', 'Contact') }}</li>
				@else
				<li>{{ HTML::link('contact', 'Contact') }}</li>
				@endif

				<li>{{ HTML::link('download', 'Purchase!') }}</li>
			</ul>
		</nav>
	</div>
</header>