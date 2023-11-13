
<?php

function ctrlregistrar($request, $response, $container){
  
  
  $response->setTemplate("inscripcion.php");
  $response->set("container",$container);
  


  return $response;
}