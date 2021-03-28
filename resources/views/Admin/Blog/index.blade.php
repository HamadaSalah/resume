@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Blog</h4>
        <a href="{{route('admin.blog.create')}}">
            <button class="btn btn-primary edit-btn">Add New Post</button>
        </a>
    </div>
    <div class="card-body">
        @if ($blogs->count() > 0)
        <table class="table table-striped">
            <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>img</th>
            <th>Action</th>
            </tr>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->name }}</td>
                <td>{{ $blog->category }}</td>
                <td>{{ $blog->description }}</td>
                <td>
                    @foreach ($blog->img as $img)
                    <a data-fancybox="gallery" href="{{asset('storage/blogs/'.$img)}}">
                        <img style="height: 40px" width="40px" src="{{asset('storage/blogs/'.$img)}}">
                    </a>
                    @endforeach
                </td>
                <td colspan="1">
                    <a href="{{route('admin.blog.edit', $blog->id)}}"><button class="btn btn-primary">Edit</button></a>
                    <form style="display: inline-block" action="{{ route('admin.blog.destroy', $blog->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"/>Delete</button>
                    </form>
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
