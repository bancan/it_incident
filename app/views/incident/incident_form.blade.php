@extends('master')

@section('content')
	{{Form::open()}}
	{{Form::label('nama', $option = array())}}
	{{Form::text('incident_details')}}
	{{Form::close()}}
@stop
