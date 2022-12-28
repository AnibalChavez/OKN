<?php
//se lee la cookie de sesion
session_start();
//se establece una conexión a la base de datos
include '../login/conexion.php';
//se validarán los campos si la sesion aún no está abierta
if (empty($_SESSION) and isset($_POST['introducir_correo'])){
    //se escaparán caracteres peligrosos
    $correo=mysqli_real_escape_string($conexion,$_POST['introducir_correo']);
    $contrasena_introducida=$_POST['introducir_contrasena'];
    //se hará la consulta a la base de datos
    $consulta='select * from usuario_alumno where correo="'.$correo.'"';
    //si hubo un resultado
    if ($ejecución_de_la_consulta=$conexion->query($consulta)){
        //se obtiene la contraseña registrada
        $contrasena_guardada=$ejecución_de_la_consulta->fetch_assoc();
        //se compara la contraseña
        $verificar_contrasena=password_verify($contrasena_introducida,$contrasena_guardada['contrasena']);
        //si el resultado de la comparación ha sido verdadero
        if ($verificar_contrasena){
            //se asigna la sesión y redirecciona
            $_SESSION['name']=$nombre_de_usuario;
            header ('location:../inicio.php');
        }//si la contraseña es incorrecta
        else{
            header ('location:inicio.php');
        }
    }//si el usuario no está registrado
    else{
        header ('location:Registrarse.php');
    }
}//si hay una sesion abierta o no se enviaron datos
else{
    header ('location:inicio.php');
}
?>