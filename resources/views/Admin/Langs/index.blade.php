@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Languages</h4>
        <a href="{{route('admin.langs.create')}}">
            <button class="btn btn-primary edit-btn">Add New Language</button>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class=" text-primary">
                <tr>
                <th>Name</th>
                <th>Percentage</th>
                <th>Action</th>
                </tr>
            </thead>
        @foreach ($langs as $lang)
        <tr>
            <td>{{ $lang->name }}</td>
            <td>{{ $lang->percentage }}</td>
            <td colspan="1">
                <a href="{{route('admin.langs.edit', $lang->id)}}"><button class="btn btn-primary">Edit</button></a>
                <form style="display: inline-block" action="{{ route('admin.langs.destroy', $lang->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"/>Delete</button>
                </form>
                {{-- <a href="{{route('admin.skills.destroy', $skill->id)}}"><button class="btn btn-danger">delete Skills</button></a> --}}
            </td>
        </tr>
        @endforeach
        </table>
    </div>
</div>

    
@endsection
