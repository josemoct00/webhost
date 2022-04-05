<?php

session_start();

$usuario;

if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}

print_r($usuario);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../main.css">
    <title>Cupos</title>

    <style>
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }


        

    </style>


</head>
<body>

<!--Barra de navegación-->

    <div class="container w-100 bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="#"><img src="../img/logo.jpg" class="img-fluid rounded-circle" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $usuario["Codigo"]; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../index.html">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>

<!--Parte principal: -->

<div class="container w-100 mt-3" >

    <div class="row justify-content-md-center" >

        <div class="col-3 m-sm-0 m-lg-auto m-md-auto" >

            <nav class="navbar navbar-nav bg-dark border border-primary border-3">
                <ul class="nav navbar-nav ml-auto text-center">
                    <li class="nav-item border ">
                        <a class="nav-link text-white " href="./usuario.php"> Mi cuenta </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./bicicleta.php"> Mi bicicleta </a>
                    </li>
                    <li class="nav-item border ">
                        <a class="nav-link text-white" href="./registros.php"> Mis registros </a>
                    </li>
                    <li class="nav-item border border-primary bg-primary">
                        <a class="nav-link text-white" href="./cupos.php"> Cupos disponibles </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./contacto.php"> Contáctenos </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--Contenido cambiante: -->
        <div class="col-9 col-md-8 border border-primary border-3 " style="height: 80vh; overflow: scroll; ">
            <div class="container-fluid bg-light p-1 my-1" style="height: 8vh;">
                <h2 class="text-capitalize">cupos disponibles</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-6 my-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.809048675524!2d-74.06773048489417!3d4.628130943570376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a286d598bd5%3A0xddf14904a87dfb47!2sUniversidad%20Distrital%20Francisco%20Jos%C3%A9%20de%20Caldas!5e0!3m2!1ses-419!2sco!4v1647807497684!5m2!1ses-419!2sco" width="420" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <hr>
                </div>
                <div class="col-md-6 my-1">
                    <table class="table table-striped table-bordered table-hover" width="300" height="300">
                        <thead>
                            <tr>
                            <th scope="col">DATOS</th>
                            <th scope="col">INFORMACION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FACULTAD</td>
                                <td>Ingenieria - calle 40</td>
                            </tr>
                            <tr>
                                <td>DIRECCION</td>
                                <td>Ak. 7 ##40b-5</td>
                            </tr>
                            <tr>
                                <td>CAPACIDAD</td>
                                <td>200 bicicletas</td>
                            </tr>
                            <tr>
                                <td>HORARIO</td>
                                <td>6:00 - 18:00</td>
                            </tr>
                            <tr>
                                <td>ESTADO</td>
                                <td>Abierto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Tabla prueba-->
            <div class="container-fluid bg-light p-1 my-1">
            <div class="card">
            <div class="card-header">
                Listado de horas disponibles
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        <th scope="col">HORA</th>
                        <th scope="col">CUPOS DISPONIBLES</th>
                        <th scope="col">OPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6:00 a 7:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>7:00 a 8:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>8:00 a 9:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>10:00 a 11:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>11:00 a 12:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>12:00 a 13:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>13:00 a 14:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>14:00 a 15:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>15:00 a 16:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>16:00 a 17:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                        <tr>
                            <td>17:00 a 18:00</td>
                            <td>70</td>
                            <td><a href="../paginas/cupos.html">  Seleccionar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </div>
        
        <!--Tabla prueba acaba-->
        </div>
    </div>
</div>












    
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>