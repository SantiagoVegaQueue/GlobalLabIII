<?php
	
	//Acá definimos variables para la conexion de la base de datos
    $servidor = "localhost";
    $username_db = "root";
    $password_db = "";
    $base_de_datos = "tienda";

    $conn = mysqli_connect($servidor, $username_db, $password_db) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db($conn, $base_de_datos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    //Despues comprobamos la conexion en register php
    //Creando la conexion

   /* $conn = mysqli_connect($servidor, $username,"") or die ("No se ha podido conectar al servidor de Base de datos");

    $db = mysqli_select_db($conn, $base_de_datos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos");
    
    $consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query( $conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table border='1' >";
	echo "<tr>";
	echo "<th>username</th>";
    echo "<th>password</th>";
    echo "<th>rol_id</th>"	;
	echo "</tr>";
	
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['username'] . "</td><td>" . $columna['password'] . "</td><td>" . $columna['rol_id'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla

	// cerrar conexión de base de datos
	*/
?>