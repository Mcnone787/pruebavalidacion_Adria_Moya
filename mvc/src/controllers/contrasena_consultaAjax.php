<?php

function contrasena_consultaAjax($request, $response, $container,$key){
        
      $acces=false;
      if($key==$_POST["contrasena"]){
        $acces=true;
        $response->setSession("identified","true" );

      }else{
        $response->setSession("identified","false" );
      }

       echo $acces;
}