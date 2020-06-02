<?php 
	
	include 'conexion.php';
	
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];


    $checkuser = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";

    $resultado = $conn-> query($checkadmin);

    $cant = mysqli_num_rows($resultado);

    if ($cant == 1) {
    	/*echo "Usuario ya existente <br>";
     	echo "se selecciono al admin";*/
     	header("Location:panel_admin.php");
     }else{
     	$username = $_POST['username'];
     	$password = $_POST['password'];
 		$rol_id = $_POST['rol'];
     	$passwordHash = password_hash($password, PASSWORD_DEFAULT);

     	$query = "INSERT INTO 'usuarios' ('username', 'password', 'rol_id') VALUES ('$username','$password', '$rol_id')";

     	if (mysqli_query($conn, $query)) {
     		echo "inserccion exitosa";
     	}else{
     		echo "Error: " . $query . "<br>" . mysqli_error($conn);
     	}
     }
     
 ?>