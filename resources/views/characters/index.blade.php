@extends('layouts.app')

@section('title', 'Characters')

@section('content')
    <div>
        <p>Lista de personajes</p>
    </div>    
    <div class="row">
    @foreach ($characters as $character)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$character->charactername}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Mas Información</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
