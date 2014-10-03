<html>
<head>
	<title>Roll-dice Game</title>
</head>
<body>

	<p>Take a Guess!</p>
	<p>You guessed {{{ $guess }}}. </p>
	<p>I rolled a {{{ $random }}}. </p>
	@if($guess == $random)
		<p>You Won!</p>
	@else 
		<p>Sorry, Try Again :( </p>
	@endif 

</body>
</html>