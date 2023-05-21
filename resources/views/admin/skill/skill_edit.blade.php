@extends('admin.admin_main')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Update Skill</h4>
                    <form method="post" action="{{route('update.skill', $skill_edit->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Skill Name</label>
                            <div class="col-sm-10">
                                <input name="skill_name" class="form-control" type="text" id="skill_name" value="{{$skill_edit->skill_name}}">
                            </div>
                        </div>
                    <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Skill Number</label>
                            <div class="col-sm-10">
                                <input name="skill_number" class="form-control" type="number" id="skill_number" value="{{$skill_edit->skill_number}}">
                            </div>
                        </div>
                    <!-- end row -->

                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Skill">
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
