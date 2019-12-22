<div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                        ID
                      </th>
                      <th style="text-align: center;">
                        Image
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>


                    <tbody>
                      @foreach($sliders as $slider)
                      <tr>
                        <th>
                        {{ $slider->id }}
                      </th>
                      <th>
                        <img src="{{ asset('storage/'.$slider->feature_image) }}">
                      </th>
                      <th>
                        {{ $slider->title }}
                      </th>
                      <th>
                        {{ $slider->description }}
                      </th>
                      <th>
                      <a class="btn btn-primary" href="{{ route('sliders.edit',$slider->id)}}">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                      </th>
                    </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
              </div>