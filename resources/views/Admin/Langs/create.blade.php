@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Add New Language</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.langs.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="name">Percentage:</label>
                <input type="text" class="form-control" name="percentage">
            </div>
            <div class="form-group">
                <button style="cursor:pointer;width:100%" type="submit" class="btn btn-primary">Add Langues</button>
            </div>
        </form>
    </div>
</div>
@endsection
