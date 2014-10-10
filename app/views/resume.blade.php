@extends('layouts.master')

@section('title')
    Resume
@stop
  
@section('content')
<!-- link to portfolio on line below -->
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Bio</a></li>
  <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a>
</li>
</ul>
<div class="">
  <h1>Audrey Lopez</h1>
  <p>..Bio .. Objectives ..Cover sheet, ect..</p>
</div>
	

<div class="jumbotron">
<p>CONTACT:</p>
audreyelopez@gmail.com<br>
LinkedIn<br>
GitHub<br>
</div>

<div>
<p>WORK EXPERIENCE:</p>
Job 1
What you do currently.
May 2013 - Present<br>
Job 2
What you did.
May 2013 - Present<br>
</div>
<div>
<p>EDUCATION:</P>
LAMP+J Software Development Bootcamp Codeup San Antonio, TX<br>
Graduating in Spring 2014 (IN PROGRESS)<br>
Undergrad Awesome University 4 Years Course<br>
June 2012</p>

@stop

@section('bottom-script')
<style>
<div id="Contact"></div>
</style>

</body>
</html>
@stop     

