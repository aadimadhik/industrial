@extends('frontend.layouts.app')

@section('title')

	Services - Industrial

@endsection


@section('content')

	@include('frontend.services.__banner')
	@include('frontend.homes.__services')
	@include('frontend.services.__additionalStandard')

@endsection