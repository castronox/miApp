
    <!-- así se incrustan vistas desde la carpeta de layouts -->
@extends ('layouts.base')
@section ('contenido')
    <div class="container">

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

    </div>
    @endsection
