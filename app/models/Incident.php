<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Incident extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'fact_incident';

	public function list_incident (){
		$query = DB::table('fact_incident')
					->leftjoin('dim_group','fact_incident.incident_group','=', 'dim_group.group_id')
					->leftjoin('dim_status','fact_incident.incident_status','=', 'dim_status.status_id')
					->leftjoin('dim_resolver','fact_incident.incident_resolver','=', 'dim_resolver.resolver_id')
					->leftjoin('dim_category','fact_incident.incident_category','=', 'dim_category.category_id')
					->get();

		//var_dump($query);
		return $query;
	}
	public function select_incident ($id) 
	{
		//echo $id;
		$query = DB::table('fact_incident')
					->leftjoin('dim_group','fact_incident.incident_group','=', 'dim_group.group_id')
					->leftjoin('dim_status','fact_incident.incident_status','=', 'dim_status.status_id')
					->leftjoin('dim_resolver','fact_incident.incident_resolver','=', 'dim_resolver.resolver_id')
					->leftjoin('dim_category','fact_incident.incident_category','=', 'dim_category.category_id')
					->where('fact_incident.incident_id',$id)
					->get();

		return $query;			
	}
	public function delete_incident () 
	{

	}

}
