<?php
 
    include('../../conexion.php');

   // echo"<h1> Hellow WOrd</h1>";

    if(isset($_REQUEST['id'])){

        $id = $_REQUEST['id'];

        $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($conexion_DB,$query);

        if($result){
            $_SESSION['message'] = 'Resgister Removed successfully';
            $_SESSION['message_type'] = 'success';
            header("Location:../../Views/ViewIndex.php");

        }else{

            $_SESSION['message'] = 'Error al intentar conectar con la Database';
            $_SESSION['message_type'] = 'danger';
            header("Location:../../Views/ViewIndex.php");
        }

    }else{ 
        
        $_SESSION['message'] = 'Unsuccessful database connection';
        $_SESSION['message_type'] = 'danger';
        header("Location:../../index.php");
    } 
?>