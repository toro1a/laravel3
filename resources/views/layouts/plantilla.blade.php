<!doctype html>

    <html>

        <head>

            <meta charset = "utf-8">
            <title>Laravel</title>

            <style>

                body{

                    background-color:#f8e6ed;

                    
                }

                .contenido{

                    padding: 10px;
                    
                }

                .imagenCabecera{

                    float:right;
                    padding-right: 100px;
                    width:120px;
                    height:120px;
                }

                .cabecera{

                    text-align:center;
                    font-size:x-large;
                    font-family:Tahoma, Geneva, sans-serif;
                    margin-bottom:100px;
                    color:#522450;
                }

                .pie{

                    bottom: 0px;
                    width:100%;
                    font-size: 0.7em;
                    margin-bottom:15px;
                    color:#522450;
                }

                .contenido table{

                    width:500px;
                    text-align:center;

                    margin: 0 auto;
                    
                }

                .contenido form table{

                    margin: 0 auto;

                }

                .contenido h1{

                    text-align:center;
                }

                .eliminar{

                    margin-top:20px;
                    text-align:center;

                }

                .error{

                    text-align:center;
                    color:red;
                    
                }

            </style>

        </head>

        <body>

            <img src="/images/logo.png" class ="imagenCabecera"/>

            <div class = "cabecera">

            @yield("cabecera")

            </div>

            <div class = "contenido">

            @yield("contenido")

            </div>

            <div class = "pie">

            @yield("pie")
            <h3>by Alejandro Toro</h3>

            </div>

        </body>


    </html>