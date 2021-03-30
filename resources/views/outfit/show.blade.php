@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Outfit: {{$outfit->type}}</h4>
                </div>

                <div class="card-body">
                    <h4>Type: {{$outfit->type}}</h4>
                    <h5>Color: {{$outfit->color}}</h5>
                    <h5>Size: {{$outfit->size}} </h5>
                    <h5>Description: {{$outfit->about}}</h5>
                    {{-- {!!$outfit->about!!} cia labai pavojingas rasymas, bet viska graziai atvaizduoja   --}}
                    <div class="form-group">
                        <a class="btn btn-outline-success btn-sm" href="{{route('outfit.index')}}">ALL OUTFIT</a>
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('outfit.edit',[$outfit])}}">EDIT OUTFIT</a>
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('master.edit',[$outfit->outfitMaster])}}">EDIT MASTER</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
