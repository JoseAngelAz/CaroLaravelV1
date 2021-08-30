@extends('layouts.plantilla')
@section('title','Crear Producto')


@section('content')
<h2 class="bg-danger">Formulario del Producto</h2>
@include('layouts.formulario')
@endsection('content')

@section('aside')
<h2 class="bg-success">Imagen</h2>
@include('layouts.imagenpre')
@endsection('aside')