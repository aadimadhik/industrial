
              <div class="card-body">

                <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                  @csrf

                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Slider's Title" name="title" required>
                        <div class="invalid-feedback">Please Enter Title</div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Slider's Description" name="description" required></textarea>
                        <div class="invalid-feedback">Please choose an image</div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="feature_image" name="feature_image" onchange="show()" required>
                                <label class="custom-file-label" for="feature_image">Choose Slider Image..</label>
                                <div class="invalid-feedback">Please choose an image</div>
                            </div>
                        </div>

                        <div class="col-md-3">
                           <img src="" alt="" id="feature_image-tag" width="100px">
                        </div>

                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                      </div>
                    </div>

                </form>
              </div>

              <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#profile-img-tag').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                $("#profile-img").change(function(){
                    readURL(this);
                });
            </script>
