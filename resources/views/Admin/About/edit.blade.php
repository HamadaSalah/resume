@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Edit About Page</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.about.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="{{$about->name}}">
            </div>
            <div class="form-group">
                <label for="name">email:</label>
                <input type="email" class="form-control" name="email" value="{{$about->email}}">
            </div>
            <div class="form-group">
                <label for="name">phone:</label>
                <input type="text" class="form-control" name="phone" value="{{$about->phone}}">
            </div>
            <div class="form-group">
                <label for="name">Date Of Birth:</label>
                <input type="text" class="form-control" name="dateOfBirth" value="{{$about->dateOfBirth}}">
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <input type="text" class="form-control" name="address" value="{{$about->address}}">
            </div>
            <div class="form-group">
                <label for="name">Nationality:</label>
                <input type="text" class="form-control" name="nationality" value="{{$about->nationality}}">
            </div>
            <div class="form-group">
                <label for="name">Profile Intro:</label>
                <textarea type="text" class="form-control" name="profileText">{{$about->profileText}}</textarea>
            </div>
            <div>
                <label for="file_image1">Resume </label>
                <input name="resumeFile" type="file" class="form-control" id="file_image1" style="padding: 3px">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
@endsection
