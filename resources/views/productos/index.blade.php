@extends("../layouts/plantilla")

@section("cabecera")

<h1>Leer datos</h1>

@endsection


@section("contenido")

    <table border = "1">

        <tr>

            <th>Nombre producto</th>

            <th>Seccion</th>

            <th>Precio</th>

            <th>Imagen</th>

        </tr>

        @foreach($productos as $producto)

            <tr>

                <td><a href ="{{route('productos.edit', $producto->id)}}">{{$producto->nombre_producto}}</a></td>
                <td>{{$producto->seccion}}</td>
                <td>{{$producto->precio}}</td>
                <td><img src = "/storage/uploads/{{$producto->imagen_producto}}" width="100"/></td>

            </tr>

        @endforeach

</table>

@endsection

@section("pie")

@endsection