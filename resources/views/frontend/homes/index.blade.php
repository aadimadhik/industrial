@extends('frontend.layouts.app')

@section('title')
        Home - Industrial
@endsection


@section('content')
        
  @include('frontend.homes.__banner')
  @include('frontend.homes.__services')
  @include('frontend.homes.__standard')
  @include('frontend.homes.__build')
  @include('frontend.homes.__handle')
  @include('frontend.homes.__projects')
  @include('frontend.homes.__testimonial')
  @include('frontend.homes.__blog')
  


@endsection