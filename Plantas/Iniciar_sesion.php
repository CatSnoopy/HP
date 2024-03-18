<?php    
   include "conexion.php";
 // usuario esta lo pasa a la pagina de acceso y si no lo encuentra 
//   mosi elstrara un mensaje  o lo puede enviar a alguna pagina que ustedes hagan 

   $login_usuario  = $_POST["Admi"];
   $login_email  = $_POST["Admi@gmail.com"];
   $login_password = $_POST["123"];

   $sql    = "select * from usuarios where usuario= '$login_usuario' and password= '$login_password'  ";
   $result = $base_de_datos->query($sql);


   if ($result->num_rows > 0) {
      header('Location: Iniciar_sesion.html');    
   } else {
      echo "Usuario No registrado! ";       
   }
   


  // header('Location: RegistarPersona.html?user='.$login_usuario);
?>
