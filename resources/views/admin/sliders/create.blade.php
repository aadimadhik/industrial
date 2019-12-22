@extends('admin.layouts.app')

@section('title')
        Sliders - Create
@endsection


@section('content')
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (request()->session()->has('message'))
   <div class="alert alert-success">
   	<ul>
   		<li>{{ request()->session()->get('message') }}</li>
   	</ul>
   </div>
@endif

	@include('admin.sliders.__form')

@endsection