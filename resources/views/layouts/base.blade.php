<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Librerías de Bootstrap y otros estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Enlace a Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Librería JS de Laravel -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Estilos personalizados -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        .content {
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            color: inherit;
            /* Hereda el color del texto definido en text-light */
        }

        .sidebar a:hover {
            color: lightgray;
            /* Opcional: cambia el color al pasar el ratón */
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <div class="container-fluid h-100">
        <div class="row h-100">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark text-light  sidebar h-100">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column ">
                        <li class="nav-item p-3">
                            <a class="nav-link" href="/">Inicio</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Compras</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Departamentos</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Exportaciones</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="/ventas">Ventas</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Información del usuario</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link" href="#">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
                <br><br>
                <h1 class="text-center mb-4">Bienvenido al sistema</h1>
                <h3 class="lead text-center">Hola Usuario, ha ingresado correctamente al sistema.</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            Esta es la base de la aplicación, debajo se colocará todo el contenido dinámico.
                            <br><br>
                            <!-- Contenido dinámico de la aplicación -->
                            @yield('contenido')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
