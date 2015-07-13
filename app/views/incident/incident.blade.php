@extends('master')

@section('content')
	<div>
		<table id="" class="table table-hover">
		<thead>
			<tr>
				<th>Incident_id</th>
				<th>Incident Group</th>
				<th>Incident Details</th>
				<th>Incident resolution</th>
				<th>Incident Status</th>
				<th>Incident resolver</th>
				<th>Incident Category</th>
				<th>Incident Date</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($incident as $value)
			<tr>
				<td>{{$value->incident_id}}</td>
				<td>{{$value->group_name}}</td>
				<td>{{$value->incident_details}}</td>
				<td>{{$value->incident_resolution}}</td>
				<td>{{$value->status_name}}</td>
				<td>{{$value->resolver_name}}</td>
				<td>{{$value->category_name}}</td>
				<td>{{$value->incident_date}}</td>
				<td><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">Update</button></td>				
			</tr>
		@endforeach

		</tbody>
 		
	</table>

	
	</div>
	
<!-- /.modal-content -->
	
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          	<div class="form-group">
          	
          	 	<label for="recipient-name" class="control-label">Recipient:</label><br>
            
            	<input type="text" class="form-control" id="recipient-name">
          		
          	
          		
          			<label for="message-text" class="control-label">Message:</label>
           		 	<textarea class="form-control" id="message-text"></textarea>

            </div>
           </form>
          </div> 
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

@stop
