@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Add New Portfolio</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.portfolio.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Title:</label>
                <input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
            </div>
            <div class="form-group">
                <label for="name">Category:</label>
                <input type="text" class="form-control" name="category" value="{{$portfolio->category}}">
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" class="form-control" name="description" value="{{$portfolio->description}}">
            </div>
            <div class="form-group">
                <label for="file_image1">Select Img</label>
                <input name="img" type="file" class="form-control" id="file_image1" style="padding: 3px">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>

@endsection
