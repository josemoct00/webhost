<?php
include("conexion.php");

$codigo = $_POST['codigo'];
$contrasena = $_POST['contrasena'];


//INSERTAR DATOS
$consulta = "UPDATE Usuarios SET Contrasena='$contrasena' WHERE Codigo='$codigo'";

//Verificar

$resultado = mysqli_query($conexion, $consulta);

if ($resultado){
    header("location:../paginas/informacion.php?mensaje=Contraseña cambiada exitosamente&boton=Iniciar sesion");
}
else{
    echo $codigo;
    echo $contrasena;
}

?>