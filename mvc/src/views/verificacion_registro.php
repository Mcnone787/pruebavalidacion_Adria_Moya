<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link type='text/css' rel='stylesheet' href='srcs/style.css'>
    <title>Login | Apartamentos Figueres</title>
    <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row">
            <div clas="col-12 col-lg-12">
                <h2>Informacion de tu inscripcion</h2>
                <div class="col-12 col-lg-8" style="    display: flex;
    flex-direction: column;
    align-items: center;" >
    
                    <div class="d-flex mt-5">
                    <h4>Codigo:</h4>    
                    <p><?php echo $codigo;?></p>
                    </div>
                    <div class="d-flex mt-5">
                    <h4>Nombre:</h4>
                    <p class="text-center"><?php echo $nombre;?></p>
                    </div>
                    <div class="d-flex mt-5">

                    <h4 >Apellidos:</h4>
                    
                    <p class="text-center"><?php echo $apellido;?></p>
                    </div>
                    <div class="d-flex mt-5">

                    <h4>Email:</h4>            
                    <p class="text-center"><?php echo $email;?></p>
                    </div>
                    <div class="d-flex mt-5 mb-5">

                    <h4>Fecha de nacimiento:</h4>            
                    <p class="text-center"><?php echo $fecha;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/index.js"></script>
</body>

</html>
