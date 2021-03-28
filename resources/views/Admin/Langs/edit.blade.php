@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Language</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.langs.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value="{{$langs->name}}">
            </div>
            <div class="form-group">
                <label for="name">Percentage:</label>
                <input type="text" class="form-control" name="percentage" value="{{$langs->percentage}}">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>
</div>

@endsection
