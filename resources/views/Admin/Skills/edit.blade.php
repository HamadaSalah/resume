@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Skill</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.skills.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="{{$skills->name}}">
            </div>
            <div class="form-group">
                <label for="name">Years Of Experience:</label>
                <input type="text" class="form-control" name="years" value="{{$skills->years}}">
            </div>
            <div class="form-group">
                <label for="name">Percentage:</label>
                <input type="text" class="form-control" name="percentage" value="{{$skills->percentage}}">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>

@endsection
