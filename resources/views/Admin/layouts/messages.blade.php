@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span>
                    <b> Danger - </b> {{$error}}</span>
            </div>
        </li>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
        <b> Success - </b> {{session('success')}}</span>
    </div>
    
@endif
@if (session('error'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
        <b> Danger - </b> {{session('error')}}</span>
</div>
@endif
