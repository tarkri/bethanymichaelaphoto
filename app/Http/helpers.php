<?php
	
	function NavIsActive($url) {
		
		if(strpos(URL::current(), $url) !== false) {
			return 'active';
		}
		
	}