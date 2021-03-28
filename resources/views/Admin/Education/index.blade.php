@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Education</h4>
        <a href="{{route('admin.education.create')}}">
            <button class="btn btn-primary edit-btn">Add New Degree</button>
        </a>
    </div>
    <div class="card-body">
    <table class="table table-striped">
        @if ($educations->count() > 0)
        <table class="table table-striped">
            <tr>
            <th>University Name</th>
            <th>Grad Name</th>
            <th>From</th>
            <th>To</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
            @foreach ($educations as $education)
            <tr>
                <td>{{ $education->university_name }}</td>
                <td>{{ $education->grad_title }}</td>
                <td>{{ $education->from }}</td>
                <td>{{ $education->to }}</td>
                <td>{{ $education->description }}</td>
                <td colspan="1">
                    <a href="{{route('admin.education.edit', $education->id)}}"><button class="btn btn-primary">Edit</button></a>
                    <form style="display: inline-block" action="{{ route('admin.education.destroy', $education->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"/>Delete</button>
                    </form>
                    {{-- <a href="{{route('admin.skills.destroy', $skill->id)}}"><button class="btn btn-danger">delete Skills</button></a> --}}
                </td>
            </tr>
            @endforeach
            </table>
        @else
            <h1 style="text-align: center">No Records</h1>
        @endif
    </div>
</div>

    
@endsection
