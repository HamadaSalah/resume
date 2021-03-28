@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Add New Experience</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.experience.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Company Name:</label>
                <input type="text" class="form-control" name="company_name" >
            </div>
            <div class="form-group">
                <label for="name">Job Title:</label>
                <input type="text" class="form-control" name="job_title" >
            </div>
            <div class="form-group">
                <label for="name">From(year):</label>
                <input type="text" class="form-control " data-provide="datepicker" name="from" >
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
