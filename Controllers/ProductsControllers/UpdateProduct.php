<?php

include('../../conexion.php');

if(isset($_REQUEST['id'])){ // Seleccion y capturacion de los datos del registro
    
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conexion_DB,$query);

    if(mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre_product'];
        $precio = $row['precio'];
        $cantidad = $row['cantidad'];

        include('../../Views/ViewProducts/FormUpdateProducts.php');

    }else{

        $_SESSION['message'] = 'Unsuccessful database connection';
        $_SESSION['message_type'] = 'warning';
        header("Location:../../Views/ViewProducts/ViewProducts.php");
    }
}


if(isset($_REQUEST['register_form_products'])){

    $id = $_REQUEST['register_form_products'];
    $nombre = $_REQUEST['campo_nombre_product'];
    $precio = $_REQUEST['campo_precio'];
    $cantidad = $_REQUEST['campo_cantidad'];
    
    $query = "UPDATE productos set nombre_product = '$nombre', precio = '$precio', cantidad = '$cantidad' WHERE id = '$id'"; 
    
    $result = mysqli_query($conexion_DB,$query);

    if(!$result){

        $_SESSION['message'] = 'Query Failed!';
        $_SESSION['message_type'] = 'danger';
        header("Location:../../Views/ViewProducts/ViewProducts.php");

    }else{
        $_SESSION['message'] = 'Update successfully';
        $_SESSION['message_type'] = 'success';
        header("Location:../../Views/ViewProducts/ViewProducts.php");
    }
            
}

if(isset($_REQUEST['register_form_products']) && isset($_REQUEST['id'])){

    $_SESSION['message'] = 'Failed to update';
    $_SESSION['message_type'] = 'danger';
    header("Location:../../Views/ViewProducts/ViewProducts.php");
}

?>