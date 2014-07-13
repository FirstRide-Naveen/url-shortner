<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller for URL Shortner home page
	|--------------------------------------------------------------------------
	*/

	public function index()
	{
		return View::make('index');
	}

}

?>
