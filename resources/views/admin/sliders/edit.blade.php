@extends('admin.layouts.app')

@section('title')
        Sliders - Edit
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

<div class="card-body">

        <form method="POST" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Slider's Title" name="title" value="{{ $slider->title }}" required>
                <div class="invalid-feedback">Please Enter Title</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" placeholder="Slider's Description" name="description" required>{{ $slider->description }}</textarea>
                <div class="invalid-feedback">Please Enter Description</div>
              </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="feature_image" name="feature_image">
                        <label class="custom-file-label" for="feature_image">Choose Slider Image..</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <div><img src="{{ asset('/storage/'.$slider->feature_image) }}" alt="slider_image" width="100px"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="submit" class="btn btn-primary">
              </div>
            </div>

        </form>
      </div>


@endsection
