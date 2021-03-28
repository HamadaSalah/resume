@extends('Admin.master')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">About Page Information</h4>
        <a href="{{route('admin.about.edit', $about->id)}}">
            <button class="btn btn-primary edit-btn">EDIT</button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{ $about->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $about->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $about->phone }}</td>
                </tr>
                <tr>
                    <th>Date Of Birth</th>
                    <td>{{ $about->dateOfBirth }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $about->address }}</td>
                </tr>
                <tr>
                    <th>Nationality</th>
                    <td>{{ $about->nationality }}</td>
                </tr>
                <tr>
                    <th>Profile Text</th>
                    <td>{{ $about->profileText }}</td>
                </tr>
                <tr>
                    <th>CV</th>
                    <td><a href="{{asset('storage/resume/'.$about->resumeFile )}}">DOWNLOAD CV</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
    
@endsection
