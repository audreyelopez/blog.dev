<!DOCTYPE html>
<html>
<head>
	<title>My laravel site</title>
	<!-- include bootstrap -->
	<!-- include jQuery -->
	<!-- set some other meta data -->
	@yield('top-script')
	<!-- '@yield' defines a specific content area -->
</head>
<body>
	<!-- standard heading you'll use on all layouts -->
	<!-- some other javascript files -->
	@yield('content')
	<!-- a standard footer to use and re use -->
	<!-- someother javascript files here -->
	@yield('bottom-script')
</body>
</html>