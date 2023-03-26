<?php 

    include('../conexion.php');

    if(isset($_REQUEST['login_form'])){

        if(empty($_REQUEST['campo_users']) || empty($_REQUEST['campo_password'])){
           
            $_SESSION['message'] = 'Rellene todos los campos';
            $_SESSION['message_type'] = 'warning'; 
            header("Location:../index.php");
           
        }else{

            $usuario = $_REQUEST['campo_users'];
            $password = $_REQUEST['campo_password'];

            $query = "select * from users where (usuario='$usuario' OR email='$usuario') and password='$password'";
            $result = mysqli_query($conexion_DB,$query);
            
            if($datos=$result->fetch_object()){
                header("Location:../Views/ViewIndex.php");

            }else{

                $_SESSION['message'] = 'Usuario o Contraseña incorreto';
                $_SESSION['message_type'] = 'danger';
                header("Location:../index.php");

            }
        }
    }else{ 
        
        $_SESSION['message'] = 'Unsuccessful database connection';
        $_SESSION['message_type'] = 'danger';
        header("Location:../index.php");
    }

?>