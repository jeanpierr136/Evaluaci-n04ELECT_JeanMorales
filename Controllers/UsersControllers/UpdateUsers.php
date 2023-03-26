<?php

include('../../conexion.php');

if(isset($_REQUEST['id'])){ // Seleccion y capturacion de los datos del registro
    
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conexion_DB,$query);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        $usuario = $row['usuario'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $email = $row['email'];
        $telefono = $row['telefono'];
        $edad = $row['edad'];
        $password = $row['password'];

        include('../../Views/ViewUsers/FormUpdateUsers.php');

    }else{

        $_SESSION['message'] = 'Unsuccessful database connection';
        $_SESSION['message_type'] = 'warning';
        header("Location:../../Views/ViewUsers/FormUsers.php");
    }
}


if(isset($_REQUEST['register_form'])){

    $id = $_REQUEST['register_form'];
    $usuario = $_REQUEST['campo_usuario'];
    $nombre = $_REQUEST['campo_nombre'];
    $apellido = $_REQUEST['campo_apellido'];
    $email = $_REQUEST['campo_email'];
    $telefono = $_REQUEST['campo_telefono'];
    $edad = $_REQUEST['campo_edad'];
    $password = $_REQUEST['campo_password'];
    $password2 = $_REQUEST['campo_password2'];

   
    
    $query = "UPDATE users set usuario = '$usuario', nombre = '$nombre', apellido = '$apellido', email = '$email', telefono = '$telefono', edad = '$edad', password = '$password' WHERE id = '$id'"; 
    //$query = "INSERT INTO users(usuario,nombre,apellido,email,telefono,edad,password) VALUES ('$usuario',' $nombre', '$apellido', '$email', '$telefono', '$edad', '$password')";

    $result = mysqli_query($conexion_DB,$query);

    if(!$result){

        $_SESSION['message'] = 'Query Failed!';
        $_SESSION['message_type'] = 'danger';
        header("Location:../../Views/ViewIndex.php");

    }else{
        $_SESSION['message'] = 'Update successfully';
        $_SESSION['message_type'] = 'success';
        header("Location:../../Views/ViewIndex.php");
    }
            
}

if(isset($_REQUEST['register_form']) && isset($_REQUEST['id'])){

    $_SESSION['message'] = 'Failed to update';
    $_SESSION['message_type'] = 'danger';
    header("Location:../../Views/ViewIndex.php");
}

?>