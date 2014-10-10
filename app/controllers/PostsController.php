<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// call base controller constructor
		parent::__construct();

		// run auth filter before all methods on this controller except index and show
    	$this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    //create an array of posts so that '$posts' variable is now available
	    //for use in the index.blade.php view
	    //Next, enable pagination to display only 4 posts per page
	    //Now, return existing posts in the database to index.blade.php view;
  		$posts = Post::paginate(4);
		return View::make('posts.index')->with(array('posts' => $posts));
		
		// refactored code below
		// return View::make('posts.index')->with('posts', $posts);
		// return Redirect::action('PostsController@index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Post::$rules;

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {

			Session::flash('errorMessage', 'Please enter a title and a body before 
			submitting a post');
			Log::error('Post validator fail', Input::all());
			//if post does not pass all above things (rules/$rules) follow below code, 
		    // redirect/send it back, but return with error information this time 
			return Redirect::back()->withInput()->withErrors($validator);

		} else {
		// if the post DOES pass all specified rules, however, continue on to the code below;
		// return this time with input added
		$posts = new Post();
		$post->title =  Input::get('title');
	    $post->content =  Input::get('content');
	    $post = Post::find(1);
	    $post->save();

	    // set flash data to output success message;
	    $message = 'Your post was successfully created!';
		Session::flash('successMassage', '$message');

	    return Redirect::back()->withInput();
	    // can also be written 
	    // return Redirect::action('PostsController@create')->withInput();
	    // the return in line 59 will actually Redirect using a specified path, rather 
	    // than using a path history to go back


	    }

	}

// set below code into place to add a form for post creating (include input 
// options for title and body)to the create.blade.php view,
// enable redirect with old input displayed
// {{{ action('PostsController@store') }}}
// returnRedirect::back()->withInput()`



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return only one specified post for show.blade.php view;
		$post = Post::find($id);

		if (!$post) {
			App::abort(404);
		}

		// check below code for syntax errors! 
		return View::make('posts.show')->with('post', $post);
 		// return $post;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Shows a form for editing a specific post";
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Updates a specific post";

		// set flash data to output edit success message;
	    $message = 'Your post was successfully edited';
		Session::flash('successMassage', '$message');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
			App::abort(404);
		}

		$post->delete();

		Log::info('Post has been deleted by user');

		Session::flash('successMessage', "You have successfully deleted your post: $post->title");

		return Redirect::action('PostsController@index')
	}


}
