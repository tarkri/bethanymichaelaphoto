{{-- MOBILE VIEW OF MAIN CALLOUT --}}
<div class="mobile-capture visible-xs visible-sm visible-md">
	<a href="#">Start Your Adventure</a>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ URL::to('img/logo.png') }}" class="logo" alt="Bethany Michaela Photography" /></a>
    </div>
    <a class="collapsed btn-primary btn mobile-nav visible-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="glyphicon glyphicon-th-list"></i></a>
    <div id="navbar" class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav">
      	<li class="visible-xs"><a href="#">Homepage</a></li>
        <li class="{{ NavIsActive('case-studies') }}"><a href="#">Case Studies</a></li>
        <li class="{{ NavIsActive('articles') }}"><a href="#">Articles</a></li>
        <li class="{{ NavIsActive('weddings') }}"><a href="#">Weddings</a></li>
        <li class="{{ NavIsActive('portraits') }}"><a href="#">Portraits</a></li>
        <li class="{{ NavIsActive('destinations') }}"><a href="#">Destinations</a></li>
        <li class="{{ NavIsActive('about') }}"><a href="{{ URL::to('about') }}">About</a></li>
      </ul>
     <div class="navbar-form navbar-right hidden-md hidden-xs hidden-sm">
     	 <a href="" class="btn btn-primary">Start Your Adventure</a>
     </div>
    </div><!--/.nav-collapse -->
  </div>
 
</nav>