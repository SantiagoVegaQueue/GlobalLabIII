<?php 
	
	include 'conexion.php';
	
	$conn = mysqli_connect($servidor, $username_db, $password_db) or die ("No se ha podido conectar al servidor de Base de datos");

    $db = mysqli_select_db($conn, $base_de_datos) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos");

    $checkusername = "SELECT * FROM usuarios WHERE username = '$_POST[username]'";

    $resultado = $conn-> query($checkusername);

    $cant = mysqli_num_rows($resultado);

    if ($cant == 1) {
     	echo "Usuario ya registrado";
     }else{
     	$username = $_POST['username'];
     	$password = $_POST['password'];
     	$
     	//$passwordHash = password_hash($password, PASSWORD_DEFAULT);

     	$query = "INSERT INTO usuarios (username, password) VALUES ('$username','$password')";

     	if (mysqli_query($conn, $query)) {
     		echo "INSERCCION EXITOSA";
     	}else{
     		echo "Error: " . $query . "<br>" . mysqli_error($conn);
     	}
     }
     
 ?>