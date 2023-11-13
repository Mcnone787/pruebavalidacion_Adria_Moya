<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
  </head>
  <body>
    <?php include "nav.php";  ?>
    
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/149345795_8938c9a072_b.jpg" class="d-block w-100" alt="img1">
    </div>
    <div class="carousel-item">
      <img src="imgs/4950418775_9513d04531_o.jpg" class="d-block w-100" alt="img2">
    </div>
    <div class="carousel-item">
      <img src="imgs/5056408986_db824ab23f_k.jpg" class="d-block w-100" alt="img3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="row">
        <div class="conatainer textoinicio">
            <div class="col-12 col-lg-6 mt-5">
                <h1 class="mt-5">Excursiones chulisimas</h1>
                <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iure eaque perferendis expedita suscipit error officia repudiandae unde dolorem cumque ullam,
                     natus quaerat assumenda excepturi velit, obcaecati necessitatibus dignissimos corrupti.</p>
                     <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                            <a href="index.php?r=register"><button class="btn btn-primary" type="button">Inscribirse!</button></a>
                    </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>