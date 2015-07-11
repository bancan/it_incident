<?php

class IncidentController extends BaseController {

	public function list_incident ()
	{
		$incident = new Incident ();
		$result = $incident->list_incident ();

		return View::make('incident')-> with('incident',$result);
	}
	public function select_incident ($id)
	{
		//echo $id;
		$incident = new Incident ();
		$result = $incident->select_incident($id);

		if ($result) {
			return View::make('incident')-> with('incident',$result);
		} else {
			return "data tidak ada";
		}

	}
	public function edit_incident ($data) 
	{

		// $incident = new Incident();
		// $result = $incident->select_incident($id);

		// if ($result){

		// }
		return View::make('incident_edit');
	}
}
?>