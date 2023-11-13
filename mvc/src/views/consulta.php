<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "menu_gestores.php"; ?>
            <div class="col-12">
            <!-- Button trigger modal -->
            <?php   
                echo "<script>let session=false</script>";
                if(isset($_SESSION["identified"]) && $_SESSION["identified"]=="true"){
                    echo "<script>session=true</script>";
                }else{
                    echo "
                    <button type='button' id='btnmodal' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    Haz click para poner la contraseña para ver la informacion !
                    </button>
                    ";
                }
            ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Buenas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h3>Contraseña</h3>
                <div class="input-group mb-3">
            <input type="text" class="form-control" id="contrasena" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="button" class="btn btn-success" id="enviar">Success</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                
                <div class="row row-table" id="data">
                    <table id="myTable" class="display border rounded-2" style="width: 100%; margin-bottom: 15%; max-height: 100vh;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha de nacimiento</th>
                                <th>Ficheros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($participantes as $key => $value) {
                                # code...
                           ?>  
                                <tr>
                                    <td><?php echo $key+1?></td>
                                    <td><?php echo $value["nombre"]?></td>
                                    <td><?php echo $value["apellidos"]?> </td>
                                    <td><?php echo $value["fecha_nacimento"]?></td>
                                    <td><a href="<?php echo $value["imagensrc"]?>"> IMAGEN</a>
                                    <a href="<?php echo $value["srcpdf"]?>"> PDF</a>
                                </td>
                                    
                                </tr>
                            <?php   }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    $( document ).ready(function() {
        console.log(session)
        if(session==true){
            jQuery("#data").show()
        }else{
        jQuery("#data").hide()
        }
    });
    jQuery("#enviar").on("click",()=>{
        let valor_input_key=jQuery("#contrasena").val()
        console.log(valor_input_key)
          $.ajax({
                        type: "POST", // la variable type guarda el tipo de la peticion GET,POST,..
                        url: "index.php", //url guarda la ruta hacia donde se hace la peticion
                        data: {
                            r: "contrasena_consulta",
                            contrasena:valor_input_key
                        },
                        async: false,
                        success: function(info) {
                            console.log(info)
                            if(info==1){
                                    console.log("ho bien")
                                    jQuery("#data").show()
                                    jQuery("#btnmodal").hide()
                            }else{
                                alert("Te has equivocado :-:")
                            }
                
                        }, 
                        dataType: "html", // El tipo de datos esperados del servidor. Valor predeterminado: Intelligent Guess (xml, json, script, text, html).
                    });
    })
   
</script>
    <script>
        console.log($("body"))
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <?php include "footer.php" ?>
    <script src="srcs/index.js"></script>
    <script src="srcs/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/messages_erros_successful.js"></script>
</body>

</html>