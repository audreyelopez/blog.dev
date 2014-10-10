<!DOCTYPE html>
<html>
<head>

	<title>@yield('title')</title>
	<!-- include bootstrap below -->
	<!-- Minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<!-- Minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- ========================== -->
	<!-- include jQuery below -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- ========================== -->

	<!-- set some other meta data below -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="english">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <!-- ========================== -->

	@yield('top-script')
	<!-- above code defines a specific content area and will be changed in each different section you add it to -->
	<!-- ========================== -->

	@yield('style')

</head>

<!-- ================================================================= -->

<body>
@if (Session::has('successMessage'))
  <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif

@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif

	@yield('header')
	<!-- above makes a standard heading to use on all layouts -->
	<!-- some other javascript files -->

	@yield('content')
	<!-- a standard footer to use and re use -->
	<!-- someother javascript files here -->

<!-- ================================================== --> 
	@yield('bottom-script')
	<!-- Bootstrap core JavaScript
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/my_moment_code.js"></script>

</body>
</html>