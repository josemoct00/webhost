<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../main.css">
    <title>Contacto</title>

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
                        <?php echo $_GET['codigo']; ?>
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
                        <a class="nav-link text-white " href="./usuario.php?codigo=<?php echo $_GET['codigo']; ?>"> Mi cuenta </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./bicicleta.php?codigo=<?php echo $_GET['codigo']; ?>"> Mi bicicleta </a>
                    </li>
                    <li class="nav-item border ">
                        <a class="nav-link text-white" href="./registros.php?codigo=<?php echo $_GET['codigo']; ?>"> Mis registros </a>
                    </li>
                    <li class="nav-item border">
                        <a class="nav-link text-white" href="./cupos.php?codigo=<?php echo $_GET['codigo']; ?>"> Cupos disponibles </a>
                    </li>
                    <li class="nav-item border border-primary bg-primary">
                        <a class="nav-link text-white" href="./contacto.php?codigo=<?php echo $_GET['codigo']; ?>"> Contáctenos </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--Contenido cambiante: -->
        <div class="col-9 col-md-8 border border-primary border-3 " style="height: 80vh; overflow: scroll; ">
            <div class="container-fluid bg-light p-1 my-1" style="height: 8vh;">
                <h2 class="text-capitalize">contáctenos</h2>
            </div>
            <hr>
            
            <center>
                
                <h2>PONGASE EN CONTACTO CON NOSOTROS</h2>

                <p>A continuación pude mandar alguna pregunta, queja, reclamo o sugerencia</p>

                <form>
                    <label for="cars">Seleccione una opcion:</label>
                    <select name="" id="">
                        <option value="volvo">Enviar pregunta</option>
                        <option value="saab">Enviar queja</option>
                        <option value="opel">Enviar reclamo</option>
                        <option value="audi">Enviar sugerencia</option>
                    </select>
                    <br><br>
                    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                    <br></br>
                    <input type="submit" value="Enviar">
                    
                </form>
                <br><br>
                <p>Agradecemos todos sus comentarios y retroalimentación</p>
            </center>
            <br></br>
            <div class="row justify-content-center">
                <div class="col-md-6 my-6">
                    <center>
                    <img src="https://static.vecteezy.com/system/resources/previews/002/534/046/large_2x/social-media-icons-of-facebook-whatsapp-instagram-facebook-logos-free-vector.jpg" alt="W3Schools.com" style="width:100px;height:100px;"></center>
                    <hr>
                </div>
                
                
            </div>
            <p> </p>
            <p> </p>
            <p> </p>
            <!--Contenido final: -->
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