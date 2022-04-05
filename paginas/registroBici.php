<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../main.css">
    <title>Registrarse</title>
</head>
<body>

    
<div class="container w-100 rounded border bg-primary">
    <!--Barra de navegación-->
    <div class="container container-fluid w-100 bg-dark">
        
    </div>

    <!--Formulario-->

    <div class="container">
        <form class="form-horizontal" role="form" method = "post">

            <div class="form-group">
                <label class="col-sm-3 control-label">Nombre bicicleta</label>
                <div class="col-sm-9">
                    <input type="text" name="pnombre" required placeholder="Ingresa tu primer nombre" class="form-control" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Tipo</label>
                <div class="col-sm-9">
                    <input type="text" name="snombre" required placeholder="Ingresa tu segundo nombre" class="form-control" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Color</label>
                <div class="col-sm-9">
                    <input type="text" name="papellido" required placeholder="Ingresa tu primer apellido" class="form-control" autofocus>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Marca</label>
                <div class="col-sm-9">
                    <input type="text" name="sapellido" required placeholder="Ingresa tu segundo apellido" class="form-control" autofocus>
                </div>
            </div>

            <br>
            <button type="submit" name="enviar" class="btn btn-primary btn-block" >Enviar datos</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
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