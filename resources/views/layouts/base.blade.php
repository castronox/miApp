<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Aplicados los comandos 'composer require laravel/ui' y el paquete para trabajar desde distintos frameworks  'php artisan ui bootstrap' -->

    <!-- Libreiria JS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Estilos con bootstrap -->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Bienvenido al sistema</h1>
        <p class="lead text-center">Hola Usuario, ha ingresado correctamente al sistema.</p>

        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <p>Esta es la base de la aplicación, debajo se colocará todo el contenido dinámico.</p>
                        <div>
                            <!-- Contenido dinámico de la aplicación -->
                            @yield('contenido')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>