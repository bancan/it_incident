<?php

class CategoryController extends BaseController {

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

	public function list_category ()
	{
		//echo 'nananan';
		$list = new Category;
		$var = $list->list_category();

		//var_dump($var);

		return View::make('category')->with('category',$var);
	}
	public function select_category ($id)
	{
		$category = new Category;
		$result = $category->select_category($id);

		return View::make('category')->with('category',$result);
	}

}
