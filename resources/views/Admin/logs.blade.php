@extends('Admin.master')
@section('content')
@if(count($activitys) > 0)
<table class="table table-striped">
    <thead style="background: rgb(28 219 5 / 60%);">
      <tr>
        <th scope="col">#</th>
        <th scope="col">admin</th>
        <th scope="col">user</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($activitys as $key => $activity)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$activity->causer->name}}</td>
        <td>@if ($activity->subject)
            {{$activity->subject->created_at->translatedFormat('l j F Y || h:m:s')}}
            @else
            User Deleted
        @endif
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@else 
<h1 style="text-align: center">No Records</h1>
@endif

    
@endsection
