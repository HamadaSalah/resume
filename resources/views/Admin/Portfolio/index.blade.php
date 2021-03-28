@extends('Admin.master')
@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title" style="float: left;line-height:50px">Portfolio</h4>
        <a href="{{route('admin.portfolio.create')}}">
            <button class="btn btn-primary edit-btn">Add New Portfolio</button>
        </a>
    </div>
    <div class="card-body">
        @if ($portfolios->count() > 0)
        <table class="table table-striped">
            <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Description</th>
            <th>img</th>
            <th>Action</th>
            </tr>
            @foreach ($portfolios as $portfolio)
            <tr>
                <td>{{ $portfolio->title }}</td>
                <td>{{ $portfolio->category }}</td>
                <td>{{ $portfolio->description }}</td>
                <td>
                    @foreach ($portfolio->img as $img)
                    <a data-fancybox="gallery" href="{{asset('storage/portfolio/'.$img)}}">
                        <img style="height: 40px" width="40px" src="{{asset('storage/portfolio/'.$img)}}">
                    </a>
                    @endforeach
                </td>
                <td colspan="1">
                    <a href="{{route('admin.portfolio.edit', $portfolio->id)}}"><button class="btn btn-primary">Edit</button></a>
                    <form style="display: inline-block" action="{{ route('admin.portfolio.destroy', $portfolio->id )}}" method="POST">
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
