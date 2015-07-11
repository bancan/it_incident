<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Category extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dim_category';

	public function list_category (){

		//echo "this is list category";
		$query = DB::table('dim_category')->get();
		
		return $query;
	}

	public function select_category ($id){

		// echo $id;
		$query = DB::table('dim_category')->where('category_id',$id)->get();
		
		//var_dump($query);
		return $query;
	}

	public function delete_category ($id){
		
		$query = DB::table('dim_category')->where('category_id',$id)->delete();

	}

	public function update_category($id) {
		$query = DB::table('dim_category')
							->where('category_id',$id)
							->update();
	}

}
