<?php    
   include "conexion.php";
 // usuario esta lo pasa a la pagina de acceso y si no lo encuentra 
//   mosi elstrara un mensaje  o lo puede enviar a alguna pagina que ustedes hagan 

   $login_nombre  = $_POST["nombre"]; 
   $login_password = $_POST["contraseña"];

   $sql    = "select * from administrador  where nombre= '$login_nombre' and contraseña= '$login_password'  ";
   $result = $base_de_datos->query($sql);


   if ($result->num_rows > 0) {
      header('Location:Administrador.html');    
   } else {
      echo "Usuario No registrado! ";       
   }
   


  // header('Location: RegistarPersona.html?user='.$login_usuario);
?>
