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
        VALUES('".$_POST["nombres"]."','".$_POST["apellidos"]."','Administrador','".$_POST["email"]."','".$_POST["password"]."')";
        if ($conn->query($query) === TRUE) {
          $conn->close();
          header("Location: admin.php");
          } else {
            echo "Error: " . $query . "<br>" . $conn->error;        
            $conn->close();  
            die(); 
        } 

     
    }
           
                 
           

?> 