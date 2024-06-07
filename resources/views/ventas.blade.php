<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de ventas</title>

    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- así se incrustan vistas desde la carpeta de layouts -->
@extends ('layouts.base')

    <div class="container">
    @section ('contenido')
        <h4 class="text-center my-4">Ventas</h4>



        <p class="lead">En esta sección se muestran las ventas</p>

        <ul class="list-group mb-4">
            <li class="list-group-item">Venta 1</li>
            <li class="list-group-item">Venta 2</li>
            <li class="list-group-item">Venta 3</li>
        </ul>

        <div class="alert alert-info" role="alert">
            Esta es una página de ventas de ejemplo usando Bootstrap.
        </div>
        @endsection
    </div>


    <!-- Enlace a Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
