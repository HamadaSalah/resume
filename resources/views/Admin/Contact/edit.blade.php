@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Contact Page</h4>
    </div>
    <div class="card-body">
    <form method="POST" action="{{route('admin.contact.update', $id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Description:</label>
            <input type="text" class="form-control" name="description" value="{{$contact->description}}">
        </div>
        <div class="form-group">
            <label for="name">Address:</label>
            <input type="text" class="form-control" name="address" value="{{$contact->address}}">
        </div>
        <div class="form-group">
            <label for="name">Phone:</label>
            <input type="text" class="form-control" name="phone" value="{{$contact->phone}}">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" value="{{$contact->email}}">
        </div>
        <div class="form-group">
            <label for="name">Socail Description</label>
            <input type="text" class="form-control" name="social_description" value="{{$contact->social_description}}">
        </div>
        <div class="form-group">
            <label for="name">Facebook</label>
            <input type="text" class="form-control" name="facebook" value="{{$contact->facebook}}">
        </div>
        <div class="form-group">
            <label for="name">twitter</label>
            <input type="text" class="form-control" name="twitter" value="{{$contact->twitter}}">
        </div>
        <div class="form-group">
            <label for="name">Youtube</label>
            <input type="text" class="form-control" name="youtube" value="{{$contact->youtube}}">
        </div>
        <div class="form-group">
            <label for="name">Google</label>
            <input type="text" class="form-control" name="google" value="{{$contact->google}}">
        </div>
        <div class="form-group">
            <label for="name">Linkedin:</label>
            <input type="text" class="form-control" name="linkedin" value="{{$contact->linkedin}}">
        </div>
        <div class="form-group">
            <label for="name">Instagram:</label>
            <input type="text" class="form-control" name="instagram" value="{{$contact->instagram}}">
        </div>
        <div class="form-group">
            <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
        </div>
    </form>
@endsection
    </div>
</div>
