<?php

class StatusController extends BaseController {

	public function list_status ()
	{
		
		$status = DB::SELECT("SELECT * FROM dim_status");

		return View::make('status')->with('allstatus',$status);
	}

}
?>