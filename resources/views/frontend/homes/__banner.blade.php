 {{-- <div class="top-shadow"></div> --}}

    <section class="home-slider owl-carousel">

      @foreach($sliders as $slider)
      <div class="slider-item" style="background-image: url('{{ asset('storage/'.$slider->feature_image)}}');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              
              <h1 class="mb-4"><span>{{ $slider->title }}</span></h1>
              <p class="mb-5 w-75">{{ $slider->description }}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </section>
    <!-- END slider -->