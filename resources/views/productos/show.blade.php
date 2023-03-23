@extends("../layouts/plantilla")

@section("cabecera")

<h1>Mostrar dato</h1>

@endsection


@section("contenido")

<h1>{{$producto->nombre_producto}}</h1>

@endsection

@section("pie")

@endsection