
@extends('layouts.master')

@section('head')
	
	@parent

    <title> Home Page </title>
	
@stop


@section('content')
	Home Page
	@if(Session::has('success'))
		<div calss="alert alert-success">{{Session::get('success') }} </div>
	@elseif(Session::has('fail'))
		<div calss="alert alert-danger">{{Session::get('fail') }} </div>
	@endif
	
@stop