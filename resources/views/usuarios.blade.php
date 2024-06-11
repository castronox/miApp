@extends ('layouts.base')

@section('contenido')
    <div class="container">
        <h1 class="text-center">Sección de usuarios</h1>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped h-100">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Ventas</th>
                            <th scope="col">Compras</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Santiago</td>
                            <td>Aguirre</td>
                            <td>santiago@gmail.com</td>
                            <td>Deportes</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Marcia</td>
                            <td>Gutierrez</td>
                            <td>marcia@gmail.com</td>
                            <td>Decoración</td>
                            <td>3</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ana</td>
                            <td>Martínez</td>
                            <td>ana_mar@gmail.com</td>
                            <td>Automoción</td>
                            <td>10</td>
                            <td>7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
