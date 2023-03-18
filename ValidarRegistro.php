<?php

$conexion=mysqli_connect("localhost","root","123456","validar");

$NOMBRE=$_POST['nombre(s)'];
$PRIMERAPELLIDO=$_POST['primer_apellido'];
$SEGUNDOAPELLIDO=$_POST['segundo_apellido'];
$FECHA=$_POST['Fecha'];
$CIUDAD=$_POST['ciudad'];
$DIRECCION=$_POST['Direccion'];
$CORREO=$_POST['Correo'];
$TELÉFONO=$_POST['Teléfono'];
$USUARIO=$_POST['usuario'];
$CONTRASEÑA=$_POST['Contraseña'];
$CCONTRASEÑA=$_POST['CContraseña'];

$query_insert = "INSERT INTO registro(Nombre(s), Primer_Apellido, Segundo_Apellido, Fecha, Ciudad, Direccion, Correo, Teléfono, Usuario, Contraseña, CContraseña)
VALUES(?,?,?,?,?,?,?,?,?,?,?)";

$consulta = "SELECT* FROM registro where Nombre(s) = '$NOMBRE', primer_apellido='$PRIMERAPELLIDO'
segundo_apellido = '$SEGUNDOAPELLIDO', Fecha = '$FECHA', ciudad = '$CIUDAD',
Direccion = '$DIRECCION', Correo = '$CORREO', Teléfono = '$TELÉFONO',
usuario = '$USUARIO', Contraseña = '$CONTRASEÑA' and CContraseña = '$CCONTRASEÑA'";


$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:register.html");

}else{
    include("Register.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>