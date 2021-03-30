@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Outfits List</h4>

                    <div class="make-inline">
                        <form action="{{route('outfit.index')}}" method="get" class="make-inline">
                            <div class="form-group make-inline">
                                <label>Master: </label>
                                <select class="form-control" name="master_id">
                                    <option value="0" @if($filterBy==0) selected @endif>All Masters</option>
                                    @foreach ($masters as $master)
                                    <option value="{{$master->id}}" @if($filterBy==$master->id) selected @endif>
                                        {{$master->name}} {{$master->surname}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="form-check-label">Sort by type:</label>
                            <label class="form-check-label" for="sortASC">ASC</label>
                            <div class="form-group make-inline column">
                                <input type="radio" class="form-check-input" name="sort" value="asc" id="sortASC" @if($sortBy=='asc' ) checked @endif>
                            </div>
                            <label class="form-check-label" for="sortDESC">DESC</label>
                            <div class="form-group make-inline column">
                                <input type="radio" class="form-check-input" name="sort" value="desc" id="sortDESC" @if($sortBy=='desc' ) checked @endif>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-sm">Filter</button>
                        </form>

                        <a href="{{route('outfit.index')}}" class="btn btn-outline-secondary btn-sm">Clear filter</a>
                    </div>

                </div>
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
