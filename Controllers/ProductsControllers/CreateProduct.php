<?php 

    include('../../conexion.php');

    if(isset($_REQUEST['register_form_products'])){

        if(empty($_REQUEST['campo_nombre_product']) 
            || empty($_REQUEST['campo_precio']) 
            || empty($_REQUEST['campo_cantidad'])){
                
            $_SESSION['message'] = 'Rellene todos los campos';
            $_SESSION['message_type'] = 'warning'; 
            header("Location:../../Views/ViewProducts/FormProducts.php");

        }else{

            $nombre = $_REQUEST['campo_nombre_product'];
            $precio = $_REQUEST['campo_precio'];
            $cantidad = $_REQUEST['campo_cantidad'];

            $query = "INSERT INTO productos(nombre_product,precio,cantidad) VALUES ('$nombre', '$precio', '$cantidad')";

            $result = mysqli_query($conexion_DB,$query);

            if(!$result){
                $_SESSION['message'] = 'Unsuccessful database connection';
                $_SESSION['message_type'] = 'danger';
                header("Location:../../index.php");
                die("Query Failed!");
            }

                $_SESSION['message'] = 'Created Successfully';
                $_SESSION['message_type'] = 'success';
                header("Location:../../Views/ViewProducts/ViewProducts.php");
        }       

    }else{
        die("ERORR PHP 404");
    }

?>