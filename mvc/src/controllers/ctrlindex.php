<?php

function ctrlindex($request, $response, $container){
  
  
  $response->setTemplate("index.php");
  $response->set("container",$container);
  


  return $response;
}