@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Add New Experience</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.experience.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" name="company_name" value="{{$skills->company_name}}">
            </div>
            <div class="form-group">
                <label for="name">Job Title:</label>
                <input type="text" class="form-control" name="job_title" value="{{$skills->job_title}}">
            </div>
            <div class="form-group">
                <label for="name">From(year):</label>
                <input type="text" class="form-control" name="from" value="{{$skills->from}}">
            </div>
            <div class="form-group">
                <label for="name">to(year):</label>
                <input type="text" class="form-control" name="to" value="{{$skills->to}}">
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <textarea type="text" class="form-control" name="description">{{$skills->description}}</textarea>
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>

@endsection
