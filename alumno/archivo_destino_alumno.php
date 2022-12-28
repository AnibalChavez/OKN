<?php
//se lee la cookie de sesion
session_start();
//se establece una conexión a la base de datos
include '../login/conexion.php';
//se validarán los campos si la sesion aún no está abierta
if (empty($_SESSION) and isset($_POST['introducir_correo'])){
    //se escaparán caracteres peligrosos
    $correo=mysqli_real_escape_string($conexion,$_POST['introducir_correo']);
    $dni=mysqli_real_escape_string($conexion,$_POST['introducir_dni']);
    $contrasena_introducida=$_POST['introducir_contrasena'];
    //se hará la consulta a la base de datos
  /*   echo '<pre>';
    print_r('select * from usuario_alumno where correo="'.$correo.'"');
    echo '</pre>';
    die;*/
   $consulta='select * from usuario_alumno where correo="'.$correo.'"';
    //si hubo un resultado
    if ($ejecucion_de_la_consulta=$conexion->query($consulta)){

        //se obtiene la contraseña registrada
        $contrasena_guardada=$ejecucion_de_la_consulta->fetch_assoc();
        //se compara la contraseña
        $verificar_contrasena=password_verify($contrasena_introducida,$contrasena_guardada['intoducir_contrasena']);
        //si el resultado de la comparación ha sido verdadero
        if ($verificar_contrasena){
            //se asigna la sesión y redirecciona
            $_SESSION['name']=$nombre_de_usuario;
            header ('location:../alumno/inicio.php');
        }//si la contraseña es incorrecta
        else{
            header ('location:../index.php');
        }
    }//si el usuario no está registrado
    else{
        header ('location:../login/registar.php');
    }
}//si hay una sesion abierta o no se enviaron datos
else{
   header ('location:../index.php');
    }
?>