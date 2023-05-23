@extends('admin.admin_main')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Resume</h4>
                        <form method="post" action="{{route('update.resume', $resume_edit->id)}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Resume Title</label>
                                <div class="col-sm-10">
                                    <input name="resume_title" value="{{$resume_edit->resume_title}}" class="form-control" type="text" id="resume_title">
                                </div>
                            </div>
                            <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Resume Sub Title</label>
                                    <div class="col-sm-10">
                                        <input name="resume_subtitle" value="{{$resume_edit->resume_subtitle}}" class="form-control" type="text" id="resume_subtitle">
                                    </div>
                                </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Resume Description </label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="resume_description">{{$resume_edit->resume_description}}</textarea>
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Resume Start Date</label>
                                <div class="col-sm-10">
                                    <input name="start_time" class="form-control" type="month" value="{{$resume_edit->start_time}}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Resume End Date</label>
                                <div class="col-sm-10">
                                    <input  name="end_time" class="form-control" type="month" value="{{$resume_edit->end_time}}" id="example-text-input">
                                </div>
                            </div>
                            <!-- end row -->

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Resume">
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>

 <!--tinymce js-->
 <script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

 <!-- init js -->
 <script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
@endsection
