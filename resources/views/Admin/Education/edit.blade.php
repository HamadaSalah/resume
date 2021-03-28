@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Language</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.education.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">University Name:</label>
                <input type="text" class="form-control" name="university_name" value="{{$education->university_name}}">
            </div>
            <div class="form-group">
                <label for="name">Grade Title:</label>
                <input type="text" class="form-control" name="grad_title" value="{{$education->grad_title}}">
            </div>
            <div class="form-group">
                <label for="name">From(year):</label>
                <input type="text" class="form-control" name="from" value="{{$education->from}}">
            </div>
            <div class="form-group">
                <label for="name">to(year):</label>
                <input type="text" class="form-control" name="to" value="{{$education->to}}">
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <textarea type="text" class="form-control" name="description">{{$education->description}}</textarea>
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
