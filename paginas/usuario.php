<?php

//session_start();

//$usuario = unserialize(urldecode($_GET['usuario']));

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
    <title>Usuario</title>


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
                        <?php echo $usuario["Codigo"] ?>
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
                    <li class="nav-item border border-primary bg-primary">
                        <a class="nav-link text-white " href="./usuario.php"> Mi cuenta </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./bicicleta.php"> Mi bicicleta </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./registros.php"> Mis registros </a>
                    </li>
                    <li class="nav-item border">
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
                <h2 class="text-capitalize">Mi cuenta</h2>
            </div>
            <hr>
            <!--Contenido: -->
            <div class="row justify-content-center">
                <div class="col-md-6 my-1">
                    <center>
                    <img src="https://p16-va-default.akamaized.net/img/musically-maliva-obj/1665282759496710~c5_720x720.jpeg" alt="W3Schools.com" style="width:300px;height:300px;"></center>
                    <hr>
                    <div class="d-grid">
                    <button type="submit" name="enviar" value="Ingresar" class="btn btn-dark" >Subir Fotografia</button>
                    </div>
                </div>
                <div class="col-md-6 my-1">
                    <table class="table table-striped table-bordered table-hover" width="300" height="317">
                        <thead>
                            <tr>
                            <th scope="col">DATOS</th>
                            <th scope="col">INFORMACION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NOMBRE</td>
                                <td>Nombre de prueba</td>
                            </tr>
                            <tr>
                                <td>CODIGO ESTUDIANTIL</td>
                                <td><?php echo $_GET['codigo']; ?></td>
                            </tr>
                            <tr>
                                <td>FACULTAD</td>
                                <td>Facultad prueba</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE BICICLETAS</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>ESTADO DE CUENTA</td>
                                <td>Usuario registrado</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid">
                    <button type="submit" name="enviar" value="Ingresar" class="btn btn-dark" >Actualizar datos</button>
                    </div>
                </div>
                
            </div>
            <p> </p>
            <p> </p>
            <p> </p>
            <!--Contenido final: -->
            <!--Contenido 2: -->
            <div class="row justify-content-center">
                <div class="col-md-6 my-1">
                    <iframe src="https://calendar.google.com/calendar/embed?src=parkin40ud%40gmail.com&ctz=America%2FBogota" style="border: 0" width="410" height="300" frameborder="0" scrolling="no"></iframe>
                    <hr>
                </div>
                <div class="col-md-6 my-1">
                    <table class="table" width="300" height="300">
                        <thead>
                            <tr>
                            <th scope="col">NOVEDADES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>La bicicleta 1 fue ingresada</td>
                            </tr>
                            <tr>
                                <td>A la bicicleta 1 le quedan 5 min</td>
                            </tr>
                            <tr>
                                <td>La bicicleta 1 fue retirada</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!--Contenido 2 final: -->
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