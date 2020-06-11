<?php 
    session_start();
    require 'conexion.php';

    $sql = "SELECT username,password,rol FROM usuarios";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            if(isset($_SESSION["usernormal"])){
                header("location: index.php");
            }
            if(isset($_POST["enviar"])){
                $user = $_POST["username"];
                $pass = $_POST["password"];
                
                if($user == $row["username"] && $pass == $row["password"] && $row["rol"] == "admin"){
                    $_SESSION["useradmin"] = $row["rol"];
                    header("location: panel_admin.php");
                }elseif($user == $row["username"] && $pass == $row["password"] && $row["rol"] == "usuario"){
                    $_SESSION["usernormal"] = $row["rol"];
                    header("location: index.php");
                }
            }
            //echo "username: " . $row["username"]. " - password: " . $row["password"]. " " . $row["rol"]. "<br>";
        }
        
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);

 ?>