<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// Controller actions for each different page; 
	// Use these to render different parts of a site or app
	public function showWelcome()
    {
		return View::make('homepage');
	}	

// 	public function showResume()

	// {
	// 	return Redirect::action('HomeController@showResume');

	// }

	// }
	
	
	// refactor this Redirect below to take in parameters from specified array.
	// public function showWelcome()
	// {

	// 	return Redirect::action('HomeController@sayHello', array('Bob'));
	
	// }

	// public function sayHello($name)
	// {
	// 	$data = array('name' => $name);
	// 	return View::make('my-first-view')->with($data);
	// }


	// public function showResume()

	// {
	// 	return Redirect::action('HomeController@showResume');

	// 	// Find out :
	// 	// Why do you want to return a Redirect like this. And why use an action here instead of
	// 	// returning a View::make(like below) -because you don't want to create/make anything new to show in your
	// 	// view, only redirect someone to it? Not actually add anything to it? 
	// 	// return View::make('resume');
	// }

// refactor this redirect below to 
	// public function showResume()
 //    {
 //        return Redirect::action('HomeController@showResume');
 //    }

// Find out: how do I use the below code to convert this action method into a URL?
// <a href="{{{ action('HomeController@showResume')}}}">Resume Here</a>
//code on line 59 should be placed in your View, as a link on that page where ever you'd 
// like it to show on your webpage. 

	public function showPortfolio()
	{
		return Redirect::action('HomeController@showPortfolio');
		// return View::make('portfolio');
	}

}






