<?php
	
	//Acá definimos variables para la conexion de la base de datos
    $servidor = "localhost";
    $username_db = "root";
    $password_db = "";
    $base_de_datos = "tienda";

    $conn = mysqli_connect($servidor, $username_db, $password_db) or die ("No se ha podido conectar al servidor de Base de datos");
    
    $db = mysqli_select_db($conn, $base_de_datos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    
?>