@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Add New Degree</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.education.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">University Name:</label>
                <input type="text" class="form-control" name="university_name" >
            </div>
            <div class="form-group">
                <label for="name">Grad Title:</label>
                <input type="text" class="form-control" name="grad_title" >
            </div>
            <div class="form-group">
                <label for="name">From(year):</label>
                <input type="text" class="form-control" name="from" >
            </div>
            <div class="form-group">
                <label for="name">to(year):</label>
                <input type="text" class="form-control" name="to" >
            </div>
            <div class="form-group">
                <label for="name">Description:</label>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Add Skill</button>
            </div>
        </form>
    </div>
</div>
@endsection
