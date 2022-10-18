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
    
        $query = "SELECT Nombres,Apellidos,Rol,Correo FROM usuario 
        WHERE Correo = '".$_POST["email"]."' AND Contrasena = '".$_POST["password"]."'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               session_start();
               $_SESSION['user'] = $row["Correo"];
               $_SESSION['nombres'] = $row["Nombres"]." ".$row["Apellidos"];
               $_SESSION['rol'] = $row["Rol"];
               if($row["Rol"] == "Administrador"){
                header("Location: admin.php");
               }else{
                $_SESSION['mensaje'] = "si";
                header("Location: index.php");

               }
            }
          } else {
         
            $_SESSION['error'] = "si";
            header("Location: login.php");
          }
          
     
    }
?>