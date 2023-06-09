@extends('admin.admin_main')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Add Portfolio</h4>
                        <form method="post" action="{{route('update.portfolio', $portfolio->id)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                                <div class="col-sm-10">
                                    <select name="portfolio_category_id" class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($category as $item)
                                            <option value="{{$item->id}}" {{$item->id == $portfolio->portfolio_category_id ? "selected" : ""}}>{{$item->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                <div class="col-sm-10">
                                    <input name="portfolio_title" value="{{$portfolio->portfolio_title}}" class="form-control" type="text" id="portfolio_title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                                <div class="col-sm-10">
                                    <input name="portfolio_image" class="form-control" type="file"  id="image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{asset($portfolio->portfolio_image) }}" alt="Portfolio Image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio URL</label>
                                <div class="col-sm-10">
                                    <input name="portfolio_url" class="form-control" value="{{$portfolio->portfolio_url}}" type="text" id="portfolio_url">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="portfolio_description">{{$portfolio->portfolio_description}}</textarea>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Portfolio">
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
