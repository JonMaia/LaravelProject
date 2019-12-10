@extends('layouts.app')

@section('title', 'Crear Personaje')

@section('content')
<form method="POST" action="/characters" class="form-group" enctype="multipart/form-data">
    @csrf 
    @component('layouts.components.create.inputname')
    @endcomponent
    @component('layouts.components.create.inputserieorfilm')
    @endcomponent
    @component('layouts.components.create.inputimage')        
    @endcomponent
    <button type="submit" class="btn btn-primary">Guardar</button>            
</form>
@endsection
