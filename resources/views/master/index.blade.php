@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Masters List</h4>
                    <a class="a-padding-right" href="{{route('master.index', ['sort' => 'name'])}}">Sort by name</a>
                    <a class="a-padding-right" href="{{route('master.index', ['sort' => 'surname'])}}">Sort by surname</a>
                    <a class="a-padding-right" href="{{route('master.index')}}">Default</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($masters as $master)
                        <li class="list-group-item list-line">
                            <div>
                                <h5>{{$master->name}} {{$master->surname}}</h5>
                            </div>
                            <div class="list-line__buttons">
                                <a href="{{route('master.edit',[$master])}}" class="btn btn-outline-secondary btn-sm">EDIT</a>
                                <form method="POST" action="{{route('master.destroy', [$master])}}">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">DELETE</button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
