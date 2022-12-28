<?php
//se establece una conexion a la base de datos
include '../login/conexion.php';
//si se han enviado datos
if (isset($_POST['registrar_nombre']) and isset($_POST['registrar_contrasena'])){
    $nombre=mysqli_real_escape_string($conexion,$_POST['registrar_nombre']);
     $apellido=mysqli_real_escape_string($conexion,$_POST['registrar_apellido']);
      $dni=mysqli_real_escape_string($conexion,$_POST['registrar_dni']);
       $correo=mysqli_real_escape_string($conexion,$_POST['registrar_correo']);
    $contrasena=password_hash($_POST['registrar_contrasena'], PASSWORD_DEFAULT);
   'insert into usuario_alumno(nombre,apellido,dni,correo,contrasena) values
    ("'.$nombre.'","'.$apellido.'","'.$dni.'","'.$correo.'","'.$contrasena.'")';
    $ingresar=mysqli_query($conexion ,'insert into usuario_alumno(nombre,apellido,dni,correo,contrasena)values
    (,"'.$nombre.'","'.$apellido.'","'.$dni.'","'.$correo.'","'.$contrasena.'")')or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));

    //redirección
    header ('location:iniciar.php');
}//si no se enviaron datos
else{
    header ('location:../index.php');
}
 /*echo '<pre>';
    print_r('insert into usuario_alumno(nombre,apellido,dni,correo,contraseña)values
    ("'.$nombre.'","'.$apellido.'","'.$dni.'","'.$correo.'","'.$contraseña.'")');
    echo '</pre>';
    die;
*/
?>
