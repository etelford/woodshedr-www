<footer>
	<div class="grid-container">
		<div class="grid-75">
			<ul>
				<li>{{ HTML::link('support/faq', 'FAQ') }}</li>
				<li>{{ HTML::link('contact', 'Contact') }}</li>
				<li>{{ HTML::link('privacy', 'Privacy') }}</li>
				<li>{{ HTML::link('download', 'Purchase Woodshedr!') }}</li>
				<li class="icon"><a href="https://twitter.com/woodshedr/"><i class="entypo-social twitter"></i></a></li>
				<!--<li class="icon"><a href="https://facebook.com/woodshedr/"><i class="entypo-social facebook"></i></a></li>-->
			</ul>
		</div>
		<div class="grid-25">
			<p>&copy; 2014 Highway 1 Design</p>
	</div>
</footer>

<!--[if lt IE 9]>
  {{ HTML::script('assets/js/html5.js'); }}
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
$(function() {
	$('p.question').on('click', function(e) {
		e.preventDefault();
		$(this).next().toggle();
	});
});
</script>
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-47756356-1']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</body>
</html>