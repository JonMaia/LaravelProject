@extends('layouts.app')

@section('title', 'Personaje')

@section('content')
    @component('layouts.components.show.image', compact('character'))                            
    @endcomponent
    @component('layouts.components.show.name', compact('character'))
    @endcomponent
    @component('layouts.components.show.description', compact('character'))
    @endcomponent
@endsection
