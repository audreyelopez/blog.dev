@extends('layouts.master')

@section('content')
	<article>
	<header>
		<h1>{{{ $post->title }}}</h1>
	</header>
	<p>{{{ $post->body }}}</p>
	</article>
@stop

@section('bottom-script')
	<script type="text/javascript">
		$("#delete-form").submit(function(event) {
			if{}
		});

	</script>
@stop