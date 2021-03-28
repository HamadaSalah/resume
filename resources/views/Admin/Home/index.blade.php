@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Home Page Information</h4>
        <a href="{{route('admin.home.edit', $home->id)}}">
            <button class="btn btn-primary edit-btn">EDIT</button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{ $home->name }}</td>
                </tr>
                <tr>
                    <th>Job Title</th>
                    <td>{{ $home->job_title }}</td>
                </tr>
                <tr>
                    <th>img : </th>
                    <td>
                        @foreach ($home->img as $img)
                        <a data-fancybox="gallery" href="{{asset('storage/home/'.$img)}}">
                            <img style="max-height: 80px" class="img-thumbnail" src="{{asset('storage/home/'.$img)}}">
                        </a>
                        {{-- <img width="100px" height="100px" class="img-thumbnail" src="{{asset('storage/home/'.$img)}}" alt=""> --}}
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
