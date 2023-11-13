
<?php

function ctrlverificacion_register($request, $response, $container){
    $usermodel=$container->users();
    $ultimoregistro=$usermodel->utlimoparticipante();
  
    $codigo=$ultimoregistro["codigo"];
    $nombre=$ultimoregistro["nombre"];
    $apellido=$ultimoregistro["apellidos"];
    $email=$ultimoregistro["email"];
    $fecha=$ultimoregistro["fecha_nacimento"];
    $response->set("codigo",$codigo);
    $response->set("nombre",$nombre);
  $response->set("apellido",$apellido);
  $response->set("email",$email);
  $response->set("fecha",$fecha);
  
  $response->setTemplate("verificacion_registro.php");
  
  


  return $response;
}