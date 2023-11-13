<?php

function ctrlconsulta($request, $response, $container){
  
  $participantesmodel=$container->users();
  $participantes=$participantesmodel->getAll();

  $response->setTemplate("consulta.php");
  $response->set("container",$container);
  $response->set("participantes",$participantes);

  


  return $response;
}