@extends('admin.admin_main')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">About All</h4>
                    <form method="post" action="{{route('update.about')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$about->id}}">
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{$about->title}}"  id="example-text-input">
                            </div>z
                        </div>
                    <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="10">{{$about->short_description}}
                                </textarea>
                            </div>
                        </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="long_description">{{$about->long_description}}</textarea>
                        </div>
                    </div>
                <!-- end row -->


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                            <div class="col-sm-10">
                                <input name="about_image" class="form-control" type="file"  id="image">
                            </div>
                        </div>
                    <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($about->about_image)) ? url($about->about_image): "Image Empty"}}" alt="Card image cap">
                            </div>
                        </div>
                    <!-- end row -->

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">About Info</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="about_info" id="about_info" cols="30" rows="10">{{$about->about_info}}
                            </textarea>
                        </div>
                    </div>
                    <!-- end row -->
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About">
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>

    </div>
</div>


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>

@endsection
