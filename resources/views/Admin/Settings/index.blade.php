@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Settings</h4>
        <a href="{{route('admin.settings.edit', $setting->id)}}">
            <button class="btn btn-primary edit-btn">Edit Settings</button>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Skills Desc</th>
                <td>{{ $setting->skills_desc }}</td>
            </tr>
            <tr>
                <th>Knowledge DEsc</th>
                <td>{{ $setting->knows_desc }}</td>
            </tr>
            <tr>
                <th>Language Desc</th>
                <td>{{ $setting->langs_desc }}</td>
            </tr>
            <tr>
                <th>Exp Desc</th>
                <td>{{ $setting->exp_desc }}</td>
            </tr>
            <tr>
                <th>Education Desc</th>
                <td>{{ $setting->educ_desc }}</td>
            </tr>
            <tr>
                <th>Contact Desc</th>
                <td>{{ $setting->con_desc }}</td>
            </tr>
            <tr>
                <th>Website Name</th>
                <td>{{ $setting->website_name }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
