@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Contact</h4>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Description</th>
                <td>{{ $contact->description }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $contact->address }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $contact->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <th>Socail Description</th>
                <td>{{ $contact->social_description }}</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td><a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a></td>
            </tr>
            <tr>
                <th>twitter</th>
                <td><a href="{{ $contact->twitter }}" target="_blank">{{ $contact->twitter }}</a></td>
            </tr>
            <tr>
                <th>youtube</th>
                <td><a href="{{ $contact->youtube }}" target="_blank">{{ $contact->youtube }}</a></td>
            </tr>
            <tr>
                <th>google</th>
                <td><a href="{{ $contact->google }}" target="_blank">{{ $contact->google }}</a></td>
            </tr>
            <tr>
                <th>linkedin</th>
                <td><a href="{{ $contact->linkedin }}" target="_blank">{{ $contact->linkedin }}</a></td>
            </tr>
            <tr>
                <th>instrgram</th>
                <td><a href="{{ $contact->instagram }}" target="_blank">{{ $contact->instagram }}</a></td>
            </tr>
            <tr>
                <th>Action</th>
                <td>
                    <a href="{{route('admin.contact.edit', $contact->id)}}"><button class="btn btn-primary">Edit</button></a>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
    </div>
</div>

    
@endsection
