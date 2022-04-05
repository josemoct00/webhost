<?php
include("conexion.php");

$pnombre = $_POST['pnombre'];
$snombre = $_POST['snombre'];
$papellido = $_POST['papellido'];
$sapellido = $_POST['sapellido'];
$codigo = $_POST['codigo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];

//INSERTAR DATOS
$query = "INSERT INTO Usuarios(Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, Codigo, Correo, Contrasena, Telefono) VALUES
                                ('$pnombre', '$snombre', '$papellido', '$sapellido', '$codigo', '$correo', '$contrasena', '$telefono')";

//Verificar

$resultado = $conexion -> query($query);

if ($resultado){
    //echo "Datos insertados correctamente";
    header("location:../paginas/informacion.php?mensaje=Registro exitoso&boton=Iniciar sesion");
}
else{
    echo "Ocurrio un Error. No se insertaron los datos";
}

?>