@extends('layouts.plantilla')

@section('title','Curso')

@section('content')

<h1>Crear curso</h1>

<form action="{{route('curso.edit')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>


<button type="submit">Enviar Formulario:</button>
</form>




@endsection()