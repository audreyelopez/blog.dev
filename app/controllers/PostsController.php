<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return all existing posts in the database for index.blade.php view; 
		$posts = Post::all();
		return $posts;

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
		return View::make('posts.create')->withInput()->withErrors();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Post::$rules;

		$validator = Validator::make(input::all(), Post::$rules);

		if ($validator->fails()) {
			//if post does not pass all above things (rules/$rules) follow below code, 
		    // redirect/send it back, but return with error information this time 
			return Redirect::back()->withInput()->withErrors($validator);

		} else {
		// if the post DOES pass all specified rules, however, continue on to the code below;
		// return this time with input added
		$posts = new Post();
		$post->title =  Input::get('title');
	    $post->content =  Input::get('content');
	    $post->save();

	    return Redirect::back()->withInput();

	    }


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($posts)
	{
		//return only one specified post for show.blade.php view;
		$post = Post::find(1);
 		return $post;
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
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Deletes a specific post";
	}


}
