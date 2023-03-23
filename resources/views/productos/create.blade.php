@extends("../layouts/plantilla")

@section("cabecera")

<h1>Introducir datos:</h1>

@endsection


@section("contenido")

    <form method="post" action="/productos" files="true" enctype="multipart/form-data">

        <table>

            <tr>

                <td colspan = "2"><input type="file" name="imagen_producto" id="imagen_producto" accept="image/*"></td>

            </tr>

            <tr>

                <td><a>Nombre producto:</a></td>

                <td><input type = "text" name ="nombre_producto"></td>

                {{csrf_field()}}

            </tr>

            <tr>

                <td><a>Sección:</a></td>

                <td><input type = "text" name ="seccion"></td>

            </tr>

            <tr>

                <td><a>Precio:</a></td>

                <td><input type = "text" name ="precio"></td>

            </tr>

            <tr>

                <td><a>Fecha:</a></td>

                <td><input type = "text" name ="fecha"></td>

            </tr>

            <tr>

                <td><a>País de origen:</a></td>

                <td><input type = "text" name ="pais_origen"></td>

            </tr>

            <tr align = "center">

                <td><input type="submit" name="enviar" value ="Enviar"></td>

                <td><input type="reset" name="borrar" value ="Borrar"></td>

            </tr>

        </table>

    </form>

    @if(count($errors) > 0)

        @foreach($errors->all() as $error)

            <p class ="error" >{{$error}}</p>

        @endforeach

    @endif

@endsection