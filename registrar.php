<?php 
    session_start();
    if($_POST){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vantti";
        $conn = new mysqli($servername, $username, $password,$dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
    
        $query = "INSERT INTO usuario (Nombres,Apellidos,Rol,Correo,Contrasena) 
        VALUES('".$_POST["nombres"]."','".$_POST["apellidos"]."','Usuario','".$_POST["email"]."','".$_POST["password"]."')";
        if ($conn->query($query) === TRUE) {
          $_SESSION['user'] = $_POST["email"];
          $_SESSION['nombres'] = $_POST["nombres"]." ".$_POST["apellidos"];
          $_SESSION['rol'] = "Usuario";
          $_SESSION['esnuevo'] = "si";  
        //   setcookie("registro", true, time()+1, "/");
     
          } else {
            echo "Error: " . $query . "<br>" . $conn->error;        
            $conn->close();  
            die(); 
        } 

        $conn->close();  
        header("Location: index.php");
    }
           
                 
           

?> 