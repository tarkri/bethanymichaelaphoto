@extends('layouts.master')
	
@section('content')
	
	<div class="matte" style="display:block;width:100%;height:100%;min-height:100%; min-width:100%; background:rgba(0, 0, 0, .6);z-index:9999;"></div>
	
@stop

@section('scripts')
<script type="text/javascript" src="{{ URL::asset('js/okvideo/src/okvideo.js') }}"></script>
<script>
	$('document').ready(function(){
		$(function(){
          $.okvideo({ source: 'https://vimeo.com/102795504', volume : 0 }) 
        });
       
       $('.matte').css({
	     width : $(window).width(),
	     height : $(window).height()  
       });
	});
</script>
	
@stop