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
        $query = "DELETE FROM usuario WHERE correo = '".$_POST["email"]."'";
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