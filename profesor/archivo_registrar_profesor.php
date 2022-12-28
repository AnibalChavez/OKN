<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['registrar_nombre']) and isset($_POST['registrar_contraseña'])){
    $nombre=mysqli_real_escape_string($conexion,$_POST['registrar_nombre']);
     $apellido=mysqli_real_escape_string($conexion,$_POST['registrar_apellido']);
      $dni=mysqli_real_escape_string($conexion,$_POST['registrar_dni']);
       $correo=mysqli_real_escape_string($conexion,$_POST['registrar_correo']);
    $contraseña=password_hash($_POST['registrar_contraseña'], PASSWORD_DEFAULT);
   'insert into usuario_alumno(nombre,apellido,dni,correo,contraseña) values
    ("'.$nombre.'","'.$apellido.'","'.$dni.'","'.$correo.'","'.$contraseña.'")';
    $ingresar=mysqli_query($conexion ,'insert into usuario_alumno(nombre,apellido,dni,correo,contraseña)values
    (,"'.$nombre.'","'.$apellido.'","'.$dni.'","'.$correo.'","'.$contraseña.'")')or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

    //redirección
    header ('location:iniciar.php');
}//si no se enviaron datos
else{
    header ('location:../index.php');
}
?>