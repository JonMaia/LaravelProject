@extends('layouts.app')

@section('title', 'Characters Create')

@section('content')
<form method="POST" action="/characters" class="form-group">
    @csrf 
    <div class="form-group">
        <label for="">Nombre del Personaje</label>
        <input type="text" class="form-control" name="charactername">
    </div>
    <div class="form-group">
        <label for="">Serie/Película</label>
        <input type="text" class="form-control" name="serieorfilm">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>            
</form>
@endsection
