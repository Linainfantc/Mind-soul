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
          
            if(empty($_POST['password'])){
              $query = "UPDATE usuario SET Nombres = '".$_POST["nombres"]."', Apellidos = '".$_POST["apellidos"]."', Correo = '".$_POST["email"]."',Rol = '".$_POST["rol"]."'
              WHERE correo = '".$_POST["email"]."'";

            }else{
              $query = "UPDATE usuario SET Nombres = '".$_POST["nombres"]."', Apellidos = '".$_POST["apellidos"]."'
              , Correo = '".$_POST["email"]."', Contrasena = '".$_POST["password"]."',Rol = '".$_POST["rol"]."'        
              WHERE correo = '".$_POST["email"]."'";
            }

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