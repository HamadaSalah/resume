@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Knowledge</h4>
        <a href="{{route('admin.knowledge.create')}}">
            <button class="btn btn-primary edit-btn">Add New Knowledge</button>
        </a>
    </div>
    <div class="card-body">
    <table class="table table-striped">
        
    <tr>
    <th width='70%'>Name</th>
    <th>Action</th>
    </tr>
    @foreach ($knows as $know)
    <tr>
        <td>{{ $know->name }}</td>
        <td>
            <a href="{{route('admin.knowledge.edit', $know->id)}}"><button class="btn btn-primary">Edit</button></a>
                <form style="display: inline-block" action="{{ route('admin.knowledge.destroy', $know->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"/>Delete</button>
                </form>
        </td>
    </tr>
    @endforeach
    </table>

    </div>
</div>

    
@endsection
