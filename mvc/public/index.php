<?php

/**
 * Exemple de MVC.
 * Exemple per a M07 - Projecte 2.
 * @author: Dani Prados dprados@cendrassos.net
 *
 * Exemple amb una mini galeria d'imatges.
 * Per provar com funcionar podeu executar php -S localhost:8000 a la carpeta public.
 * I amb el navegador visitar la url http://localhost:8000/
 *
 *
 **/


include "../src/config.php";
include "../src/controllers/ctrlindex.php";
include "../src/controllers/ctrllogin.php";
include "../src/controllers/ctrlregister.php";
include "../src/controllers/ctrlregistrar.php";
include "../src/controllers/doregister.php";
include "../src/controllers/ctrlverificacion_register.php";
include "../src/controllers/ctrlconsulta.php";
include "../src/controllers/contrasena_consultaAjax.php";




include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = $_REQUEST["r"];


// /* Creem els diferents models */
// $session = new Daw\Session();
// $images = new Daw\Images();

// Front Controller

switch ($r) {
  case "login":
    ctrllogin($request, $response, $container);
    break;
    case "register":
        ctrlregistrar($request, $response, $container);
        break;
    case "doregistro":
        doregistro($request, $response, $container);
        break;
        case "verificacion_register":
            ctrlverificacion_register($request, $response, $container);
            break;
        case "consulta":
            ctrlconsulta($request, $response, $container);
            break;
        case "contrasena_consulta";
        contrasena_consultaAjax($request, $response, $container,$key);
        break;
    default:
        ctrlindex($request, $response, $container);
        break;
}

$response->response();
