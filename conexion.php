<?php 

session_start();

$conexion_DB= mysqli_connect(

    'localhost',
    'root',
    '',
    'access2'
);

/*if(isset($conexion_DB)){ //SIRVE PARA COMPROBAR LA CONEXION A LA DATABASE

    echo "<h1 sty>Connection to the database successful</h1>";
}else{
    echo"Unsuccessful database connection";
}*/

?>