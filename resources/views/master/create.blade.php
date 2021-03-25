@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create master</div>

                <div class="card-body">
                    <form method="POST" action="{{route('master.store')}}">
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" class="form-control" name="master_name" value="{{old('master_name')}}">
                            <small class="form-text text-muted">Please enter master name</small>
                        </div>
                        <div class="form-group">
                            <label>Surname: </label>
                            <input type="text" class="form-control" name="master_surname" value="{{old('master_surname')}}">
                            <small class="form-text text-muted">Please enter master surname</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success btn-sm" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection