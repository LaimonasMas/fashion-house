@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Outfits List</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($outfits as $outfit)
                        <li class="list-group-item list-line">
                            <div>
                                <h5>{{$outfit->type}}</h5>
                                {{$outfit->outfitMaster->name}} {{$outfit->outfitMaster->surname}}
                            </div>
                            <div class="list-line__buttons">
                                <a href="{{route('outfit.show',[$outfit])}}" class="btn btn-outline-success btn-sm">SHOW</a>
                                <a href="{{route('outfit.edit',[$outfit])}}" class="btn btn-outline-secondary btn-sm">EDIT</a>
                                <form method="POST" action="{{route('outfit.destroy', [$outfit])}}">
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
