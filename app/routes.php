<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return 'This is the resume';
});

Route::get('/portfolio', function()
{
    return 'This is the portfolio';
});

// alternate code to 
// Route::get('/', function()
	// or use ..
	// Route::get('/hello/{name}/{day}', function(pass parameters here if needed)
	// this case could use "function($name, $day -or other variables that match what's in the curly braces of your route, above) "
	// when you put something in {curly braces} in your Route, you're telling the computer that it's a variable *found* in this specific file
// {
	// return View::make('whatever your filename is; so the variables can find thier match in your 'view' file!');
	// in your 'View::make('file')' block, if your file doens't exit yet or anymore, this will not work. You'll 
	// get an error code, bc it's not refering to anything it can find.

	// continuing on, something like what's shown below could be used as well in your 'return' to return some more personalized input
	// in a real case use, the below line would not run, as the 'return' above it would stop to code from running further;
	// ('returns' end the code) -the example below only shows another option
	// return "Hello $name! It's $day.";
// });

// Create a route that responds to a GET request on the path /rolldice.
Route::get('/rolldice/{guess}', function($guess)
{
	$random = mt_rand(1, 6);
	// Within the route, return a random number between 1 and 6.
	$data = ['guess' => $guess , 'random' => $random];

    return View::make('roll-dice')->with($data);
});