<?php
//conexion
include("conexion.php");

//Recibe datos ingresados
$codigo = $_POST["codigo"];
$password = $_POST["password"];

//Iniciamos la sesión
session_start();
//Se le asigna el nombre obtenido anteriormente
$_SESSION["UserName"] = $codigo;


$consulta = "SELECT * FROM Usuarios WHERE Codigo='$codigo' and Contrasena='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado); //hace la validacion 

if($filas){
    header("location:../paginas/usuario.php?codigo=$codigo");
}else{
    header("location:../paginas/informacion.php?mensaje=Datos erroneos&boton=Intentar de nuevo");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
