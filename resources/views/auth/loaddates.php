<?php

include('../')

if(isset($_POST["btningresar"])){

    if(isset($_POST["usuario"]) && isset($_POST["password"])){

        $usuario = $_POST["usuario"];
        $contra = $_POST["password"];

        $consulta = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE usuario = '$usuario'");

        if($fila = mysqli_fetch_array($consulta)){


            if($usuario==$fila[1] && $contra == $fila[2]){

                header("location: dashboard.php");

                session_start();

                $_SESSION["usuario"] = $usuario;


            }else{
                header("location: login.php");
            }

        }else{

            echo "No se pudo conectar a la base de datos";

        }

    }

}

?>
