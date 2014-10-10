@extends('layouts.master')
============================== 
@section('title')
	Portfolio
@stop
============================== 

@section('content')
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Bio</a></li>
  <li><a href="{{{ action('HomeController@showResume') }}}">resume</a>
</li>
</ul>

<div class="">
  <h1>Audrey Lopez' Portfolio</h1>
</div>

@stop

==============================

@section('bottom-script')
	<h1>Hello World! Here is my Portfolio! </h1>
@stop