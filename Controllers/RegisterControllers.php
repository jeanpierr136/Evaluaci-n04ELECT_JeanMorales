<?php 

    include('../conexion.php');

    if(isset($_REQUEST['register_form'])){

        if(empty($_REQUEST['campo_usuario']) 
            || empty($_REQUEST['campo_nombre']) 
            || empty($_REQUEST['campo_apellido'])
            || empty($_REQUEST['campo_email']) 
            || empty($_REQUEST['campo_telefono'])
            || empty($_REQUEST['campo_edad'])
            || empty($_REQUEST['campo_password'])){

                $_SESSION['message'] = 'Rellene todos los campos';
                $_SESSION['message_type'] = 'warning'; 
                header("Location:../Views/ViewRegisterUsers.php");
        }else{

            $usuario = $_REQUEST['campo_usuario'];
            $nombre = $_REQUEST['campo_nombre'];
            $apellido = $_REQUEST['campo_apellido'];
            $email = $_REQUEST['campo_email'];
            $telefono = $_REQUEST['campo_telefono'];
            $edad = $_REQUEST['campo_edad'];
            $password = $_REQUEST['campo_password'];
            $password2 = $_REQUEST['campo_password2'];

            $query = "INSERT INTO users(usuario,nombre,apellido,email,telefono,edad,password) VALUES ('$usuario',' $nombre', '$apellido', '$email', '$telefono', '$edad', '$password')";

            $result = mysqli_query($conexion_DB,$query);

            if(!$result){
                die("Query Failed!");
            }

            $_SESSION['message'] = 'User Saved successfully';
            $_SESSION['message_type'] = 'success';
                
            header("Location: ../index.php"); 
        }       
                 

    }else{
        die("ERORR PHP 404");
    }

?>