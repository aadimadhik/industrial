@extends('frontend.layouts.app')

@section('title')
        Blog - Industrial
@endsection


@section('content')
        
  @include('frontend.blogs.__banner')
  
  @include('frontend.blogs.__list')
  
@endsection