@extends('frontend.layouts.app')

@section('title')

	About - Industrial

@endsection

@section('content')
	
	@include('frontend.abouts.__banner')
	@include('frontend.abouts.__mission')
	@include('frontend.abouts.__history')
	@include('frontend.homes.__standard')
	@include('frontend.abouts.__team')

	
@endsection