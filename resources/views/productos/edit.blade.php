@extends("../layouts/plantilla")

@section("cabecera")

<h1>Editar</h1>

@endsection


@section("contenido")

    <form method="post" action="/productos/{{$producto->id}}">

        <table>

            <tr>

                <td><a>Nombre producto:</a></td>

                <td><input type = "text" name ="nombre_producto" value ="{{$producto->nombre_producto}}"></td>

                {{csrf_field()}}

                <input type = "hidden" name = "_method" value = "PUT">

            </tr>

            <tr>

                <td><a>Sección:</a></td>

                <td><input type = "text" name ="seccion" value ="{{$producto->seccion}}"></td>

            </tr>

            <tr>

                <td><a>Precio:</a></td>

                <td><input type = "text" name ="precio" value ="{{$producto->precio}}"></td>

            </tr>

            <tr>

                <td><a>Fecha:</a></td>

                <td><input type = "text" name ="fecha" value ="{{$producto->fecha}}"></td>

            </tr>

            <tr>

                <td><a>País de origen:</a></td>

                <td><input type = "text" name ="pais_origen" value ="{{$producto->pais_origen}}"></td>

            </tr>

            <tr align = "center">

                <td><input type="submit" name="actualizar" value ="Actualizar"></td>

                <td><input type="reset" name="reiniciar" value ="Reiniciar"></td>

            </tr>

        </table>

    </form>

    <form class ="eliminar" method="post" action="/productos/{{$producto->id}}">

        {{csrf_field()}}

        <input type = "hidden" name = "_method" value = "DELETE">

        <input type = "submit" value="Eliminar registro">

    </form>

    
    @if(count($errors) > 0)

        @foreach($errors->all() as $error)

            <p class ="error" >{{$error}}</p>

        @endforeach

    @endif

@endsection