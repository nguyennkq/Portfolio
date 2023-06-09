@extends('admin.admin_main')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Testimonial All</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Testimonial All</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Testimonial All</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Testimonial Username</th>
                                    <th>Testimonial Avatar</th>
                                    <th>Testimonial Job</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonial as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->testimonial_username}}</td>
                                    <td><img src="{{asset($item->testimonial_avatar)}}" width="100px" alt=""></td>
                                    <td>{{$item->testimonial_job}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('edit.testimonial',$item->id)}}"><i class="fas fa-edit"></i></a>
                                        <a id="delete" class="btn btn-danger" href="{{route('delete.testimonial',$item->id)}}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-

    </div>
</div>


@endsection
