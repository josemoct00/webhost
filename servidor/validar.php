<?php
//conexion
include("conexion.php");

//Recibe datos ingresados
$codigo = $_POST["codigo"];
$password = $_POST["password"];

//Iniciamos la sesión
session_start();




$consulta = "SELECT * FROM Usuarios WHERE Codigo='$codigo' and Contrasena='$password'";
$resultado = mysqli_query($conexion, $consulta);

$row = mysqli_fetch_assoc($resultado);

$filas = mysqli_num_rows($resultado); //hace la validacion

$_SESSION["usuario"] = $row;

if($filas){
    //header("location:../paginas/usuario.php?codigo=$codigo&usuario=".urlencode(serialize($row)));
    header("location:../paginas/usuario.php");
}else{
    header("location:../paginas/informacion.php?mensaje=Datos erroneos&boton=Intentar de nuevo");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
