@extends('layouts.plantilla')

@section('title','Curso')

@section('content')

<h1>Crear curso</h1>

<form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">

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

<br>
<label >Adjuntar archivo PDF</label>
<br>
<input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">

<br><br>
<button type="submit">Enviar Formulario:</button>
</form>




@endsection()