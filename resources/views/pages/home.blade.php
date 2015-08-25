@extends('layouts.master')
	
@section('content')


	<div class="container" style="padding-top:175px;">
		<div class="jumbotron" id="homepage" style="padding:0;positional:relative; background:url({{ URL::asset('img/video-bg.jpg') }}); background-size:cover;">
			<div class="matte" style="position:absolute;display:block;width:100%;height:100%;z-index:1"></div>
			<iframe src="https://player.vimeo.com/video/102795504?autoplay=1&loop=1&color=66C3AE&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
	
@stop

@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('js/jquery.fitvids.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#homepage iframe').css('opacity', '0');
			
			$(".jumbotron").fitVids();
			setTimeout(function(){
				$('#homepage iframe').animate({opacity: 1}, 4000);
			}, 1000);
		});
	</script>
@stop