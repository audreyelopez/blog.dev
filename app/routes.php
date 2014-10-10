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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

// Route::get('/', 'HomeController@showWelcome');
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
    return View::make('hello');
})->before('auth.basic');


Route::get('orm-test', function ()
{

$post = Post::find(4);
$post->title = "Post number Four";
$post->save();
return $post;

});

// check below route for directions to the Create View 
Route::get('/create', function()
{
	return View::make('create');
});

// Below code is a correct path to the 
Route::get('/resume', 'HomeController@showResume');
// where are the methods below being declared? 
// Route::get('/resume', 'HomeController@showResume'); 

// below reoute::action is not defined 
// Route::action('/resume', 'HomeController@showResume');

Route::get('/', 'HomeController@showPortfolio');


Route::get('/', 'HomeController@showWelcome');

// =======================================

Route::resource('posts', 'PostsController');

// Route::get('/create', 'PostsController@store'); 


// 'stock' route; original "get route" 
// Route::get('/portfolio', function()
// {
//     return View::make('portfolio');
// });
// =========================================
// Route::get('/sayhello/{name}', function($name)
// {
// 	return View::make('my-first-view');
// });

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
// =====================================
// **roll-dice code below**
// Create a route that responds to a GET request on the path /rolldice.
Route::get('/rolldice/{guess}', function($guess)
{
	$random = mt_rand(1, 6);
	// Within the route, return a random number between 1 and 6.
	// an array is created below to bring about variables "$guess" and "$random"
	$data = ['guess' => $guess , 'random' => $random];

	// create 'roll-dice' view using information from above array, "$data" array. 
	// Return this newly created information to user
    return View::make('roll-dice')->with($data);
});