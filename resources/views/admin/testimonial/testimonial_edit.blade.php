@extends('admin.admin_main')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Testimonial</h4>
                        <form method="post" action="{{route('update.testimonial',$testimonial->id )}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Testimonial Username</label>
                                <div class="col-sm-10">
                                    <input name="testimonial_username"  value="{{$testimonial->testimonial_username}}" class="form-control" type="text" id="testimonial_username">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Testimonial Description</label>
                                <div class="col-sm-10">
                                    <input name="testimonial_description" value="{{$testimonial->testimonial_description}}" class="form-control" type="text" id="testimonial_description">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Testimonial Avatar</label>
                                <div class="col-sm-10">
                                    <input name="testimonial_avatar" class="form-control" type="file"  id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{asset($testimonial->testimonial_avatar)}}" alt="Testimonial Avatar">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Testimonial Job</label>
                                <div class="col-sm-10">
                                    <input name="testimonial_job" value="{{$testimonial->testimonial_job}}" class="form-control" type="text" id="testimonial_job">
                                </div>
                            </div>


                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Testimonial">
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
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
 <!--tinymce js-->
 <script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

 <!-- init js -->
 <script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
