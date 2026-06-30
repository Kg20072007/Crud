@extends('layouts.plantilla')

{{-- @section('title','Cursos') --}}
@section('estilos')
<style>
.slider{
    height: 350px;
    background:  #777;
}
</style>
@endsection()

@section('content')

<div class="container-fluid" >

<div class="row">

    <div class="col-12 col-sm-6 col-md-4 bg-danger">
        <h4>Logo Empresa</h4>
    </div>
    <div class="col-12 col-sm-6 col-md-8 bg-warning">
        <p>Menu De Navegacion</p>
    </div>
</div>
    <div class="row slider align-items-center justify-content-center">

        <div class="col-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quidem. Ducimus sit facere suscipit omnis? Aspernatur, illum harum, dolor natus veniam voluptatem alias consequuntur ullam dolorum autem aliquam voluptas cumque.</p>
        </div>

    </div>
</div>
    
    <div class="row">

        <div class="col-12 col-sm-6 col-md-4 bg-success">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quidem. Ducimus sit facere suscipit omnis? Aspernatur, illum harum, dolor natus veniam voluptatem alias consequuntur ullam dolorum autem aliquam voluptas cumque.</p>
        </div>
        <div class="col-12  col-sm-6 col-md-4 bg-info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quidem. Ducimus sit facere suscipit omnis? Aspernatur, illum harum, dolor natus veniam voluptatem alias consequuntur ullam dolorum autem aliquam voluptas cumque.</p>
        </div>
        <div class="col-12 col-md-4 bg-success">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, quidem. Ducimus sit facere suscipit omnis? Aspernatur, illum harum, dolor natus veniam voluptatem alias consequuntur ullam dolorum autem aliquam voluptas cumque.</p>
        </div>



    </div>





</div>




@endsection()