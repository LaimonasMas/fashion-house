@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create outfit</div>

                <div class="card-body">
                    <form method="POST" action="{{route('outfit.store')}}">
                        <div class="form-group">
                            <label>Type: </label>
                            <input type="text" class="form-control" name="outfit_type">
                            <small class="form-text text-muted">Please enter outfit name</small>
                        </div>
                        <div class="form-group">
                            <label>Color: </label>
                            <input type="text" class="form-control" name="outfit_color">
                            <small class="form-text text-muted">Please enter outfit surname</small>
                        </div>
                        <div class="form-group">
                            <label>Size: </label>
                            <input type="text" class="form-control" name="outfit_size">
                            <small class="form-text text-muted">Please enter outfit surname</small>
                        </div>
                        <div class="form-group">
                            <label>About: </label>
                            <textarea class="form-control" name="outfit_about" id="summernote"></textarea>
                            <small class="form-text text-muted">Please enter outfit description</small>
                        </div>
                        <div class="form-group">
                            <label>master: </label>
                            <select class="form-control" name="master_id">
                                @foreach ($masters as $master)
                                <option value="{{$master->id}}">{{$master->name}} {{$master->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success btn-sm" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
@endsection
