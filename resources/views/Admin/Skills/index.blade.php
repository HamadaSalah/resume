@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Skills</h4>
        <a href="{{route('admin.skills.create')}}">
            <button class="btn btn-primary edit-btn">Add New Skill</button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                    <th>Name</th>
                    <th>Years</th>
                    <th>Percentage</th>
                    <th>Action</th>
                    </tr>
                </thead>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->years }}</td>
                    <td>{{ $skill->percentage }}</td>
                    <td>
                        <a href="{{route('admin.skills.edit', $skill->id)}}"><button class="btn btn-primary">Edit</button></a>
                        <form style="display: inline-block" action="{{ route('admin.skills.destroy', $skill->id )}}" method="POST">
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
</div>

    
@endsection
