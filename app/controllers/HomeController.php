<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| The Home controller displays the index page to the user and redirects
	| them to the dashboard if they're already authenticated.
	|
	*/

	public function showIndex()
	{
		return View::make('home.index');
	}

}
