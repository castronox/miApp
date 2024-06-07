<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Librerías de Bootstrap y otros estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Librería JS de Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<body>
    <!-- Barra de navegación -->

    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Navbar </a>
                <button class="navbar-toogler" type="button" data-bs-toogle="collapse" data-bs-target="#navbarNav" aria-label="toogle navigation" aria-expanded="false">
                <span class="navbar-toogle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sectores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exportar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <!-- FIN NAVBAR -->

        <br><br>

        <div class="container md-5">
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

    <!-- Enlace a Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
