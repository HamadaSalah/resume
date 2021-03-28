@extends('Admin.master')
@section('content')
@if ($exps->count() > 0)
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Experience</h4>
        <a href="{{route('admin.experience.create')}}">
            <button class="btn btn-primary edit-btn">Add New Experience</button>
        </a>
    </div>
    <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>Company Name</th>
            <th>job Title</th>
            <th>From</th>
            <th>To</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    @foreach ($exps as $exp)
    <tr>
        <td>{{ $exp->company_name }}</td>
        <td>{{ $exp->job_title }}</td>
        <td>{{ $exp->from }}</td>
        <td>{{ $exp->to }}</td>
        <td>{{ $exp->description }}</td>
        <td colspan="1">
            <a href="{{route('admin.experience.edit', $exp->id)}}"><button class="btn btn-primary">Edit</button></a>
                <form style="display: inline-block" action="{{ route('admin.experience.destroy', $exp->id )}}" method="POST">
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
@else
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Experience</h4>
        <a href="{{route('admin.experience.create')}}">
            <button class="btn btn-primary edit-btn">Add New Experience</button>
        </a>
    </div>
    <div class="card-body">
        <h1 style="text-align: center">No Records</h1>
    </div>
</div>
    
@endif


    
@endsection
