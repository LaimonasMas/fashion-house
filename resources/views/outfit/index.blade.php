@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">outfits List</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($outfits as $outfit)
                        <li class="list-group-item list-line">
                            <div>
                                <h5>Type: {{$outfit->type}}</h5>
                                <h5>Color: {{$outfit->color}}</h5>
                                <h5>Size: {{$outfit->size}} </h5>
                                <h5>Description: {{$outfit->about}}</h5>
                                {{$outfit->outfitMaster->name}} {{$outfit->outfitMaster->surname}}
                            </div>
                            <div class="list-line__buttons">
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
