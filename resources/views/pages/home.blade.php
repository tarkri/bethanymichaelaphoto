@extends('layouts.master')
	
@section('content')

	<div class="container home-video" style="position:relative;">
		<div class="jumbotron" id="homepage" style="padding:0;positional:relative; background:url({{ URL::asset('img/video-bg.jpg') }}); background-size:cover;overflow:hidden;">
			<img class="overlay" src="{{ URL::asset('img/video-overlay.png') }}" style="display:block;width:300px;height:83px;position:absolute;z-index:100;top: 50%;
   left: 50%;margin-left:-150px; margin-top:0px;" alt="" />
   <div class="matte" style="position:absolute;width:100%; height:100%; display:block;z-index:101;"></div>
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
			setTimeout(function(){
				$('img.overlay').animate({opacity: 0}, 4000)
			}, 4000);
		});
	</script>
@stop