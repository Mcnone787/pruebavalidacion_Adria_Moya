<?php

function ctrllogin($request, $response, $container){
  
  
  $response->setTemplate("login.php");
  $response->set("container",$container);
  


  return $response;
}