@extends('layouts.app')

@section('title', 'Personajes')

@section('content')
    @component('layouts.components.index.title')
    @endcomponent  
    @component('layouts.components.index.charactercard', compact('characters'))        
    @endcomponent
@endsection
