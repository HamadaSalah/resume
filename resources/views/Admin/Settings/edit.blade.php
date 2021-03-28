@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Edit Settings</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.settings.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Skills:</label>
                <input type="text" class="form-control" name="skills_desc" value="{{$setting->skills_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Knowledge:</label>
                <input type="text" class="form-control" name="knows_desc" value="{{$setting->knows_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Languages:</label>
                <input type="text" class="form-control" name="langs_desc" value="{{$setting->langs_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Experience:</label>
                <input type="text" class="form-control" name="exp_desc" value="{{$setting->exp_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Education:</label>
                <input type="text" class="form-control" name="educ_desc" value="{{$setting->educ_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Contact:</label>
                <input type="text" class="form-control" name="con_desc" value="{{$setting->con_desc}}">
            </div>
            <div class="form-group">
                <label for="name">Sitename:</label>
                <input type="text" class="form-control" name="website_name" value="{{$setting->website_name}}">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
