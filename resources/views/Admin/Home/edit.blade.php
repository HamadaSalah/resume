@extends('Admin.master')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Edit Home Page</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.home.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$home->name}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Job Title</label>
                        <input type="text" class="form-control" name="job_title" value="{{$home->job_title}}">
                    </div>
                </div>
            </div>
            <input name="img[]" type="file" class="form-control" id="file_image1" style="padding: 3px" multiple>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
    </div>
@endsection
