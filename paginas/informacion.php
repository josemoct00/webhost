<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../main.css">

    <title>Información</title>
  </head>
  <body>

    <div class="container w-100 mt-3 rounded border">
      <div class="row">
        <div class="col bg-primary rounded d-none d-lg-block">
          <img src="../img/logo.jpg" class="img-fluid">

        </div>
        <div class="col rounded p-5">
          <div class="text-end">
            <img src="../img/logo.jpg" class="rounded-circle" width="60px" alt="">
          </div>

          <h2 class="fw-bold text-center py-5"><?php echo $_GET['mensaje']; ?></h2>
              
          <div class="d-grid">
              <button type="button" name="enviar" value="Ingresar" class="btn btn-light" onclick="location.href = '../index.html'" ><?php echo $_GET['boton']; ?></button>
            </div>

        </div>
      </div>
    </div>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
