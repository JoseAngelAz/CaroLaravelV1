@extends('layouts.plantilla')
@section('title','Home')

@section('banner')
@include('layouts.carrusel')

@endsection('banner')
<!--para secciones-->
@section('content')
<div class="row">

	@include('layouts.cartaProducto')
	@include('layouts.cartaProducto')
</div>
@endsection('content')	
<!--aside-->	
@section('aside')
<h2>propagandas</h2>
<div class="card col-12">
	<div class="card-header">Encabezado de la Card</div>
	<div class="card-body">Cuerpo de la Card</div>
	<div class="card-footer">Footer de la Card</div>
</div>
<!--para fin de secciones-->
@endsection('aside')

