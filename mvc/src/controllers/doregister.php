<?php
function doregistro($request, $response, $container){

    $userModel = $container->users();

    $nombre = $request->get(INPUT_POST, "nombre");
    $apellido = $request->get(INPUT_POST, "apellido");
    $email = $request->get(INPUT_POST, "email");
    $nacimento = $request->get(INPUT_POST, "nacimento");
    $imagen_="";
    $pdf="";
    $count_main=0;

    if(isset($_FILES["fichero_pdf"])){
        
            $tmp_nameimg = $_FILES["fichero_pdf"]["tmp_name"];
            $url_pdf = "imgs/inscripciones/" .$nombre."".$count_main.".pdf"; 
            
                $pdf=$url_pdf;
                $count_main++;
                move_uploaded_file($tmp_nameimg, $url_pdf);
            
            
        
    
    }

    if(isset($_FILES["fichero_imagen"])){
            
            $tmp_nameimg = $_FILES["fichero_imagen"]["tmp_name"];
            $url_img = "imgs/inscripciones/" .$nombre."".time()."".$count_main.".png"; 
            
                $imagen=$url_img;
                

                move_uploaded_file($tmp_nameimg, $url_img);
            
            
        
    
    }

    $userModel->register($nombre, $apellido, $email, $nacimento,$imagen,$pdf);

  
    $response->redirect("Location: index.php?r=verificacion_register&nombre=".$nombre."&apellido=".$apellido."&email=".$nombre."&fecha=".$nacimento);

    return $response;
}