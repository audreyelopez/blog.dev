@extends('layouts.master')
<!-- @extends tells what file you're wanting all of this info to be injected into -->
<!-- if your output says literally '@extends('layouts.master')
' or whatever else the name of your file is, instead of your real view, it's bc it's not picking up the file; probably the file is not written correctly here, bc it's not linking properly -->

<!-- if above file is included, your layout will automatically load into this file as well -->

@section('top-script')
<!-- ender whatever content here .. -->
@stop

@section('content')
<h1>Laravel is awesome</h1>
<p>Really guys, it really is</p>
<p>Hi {{{$student}}}, it's {{{$day}}} . </p>
<!-- 3 mustaches automatically escapes html code, it protects the site from ppl entering their own code. Instead of actually running the code, it will just output it exactly the way it was written. -->
@stop 

