<?php session_start(); 
include 'php/properties.php';
?>
<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CEN Normandie</title>
    <link rel="shortcut icon" href="img/l-aiguillette-mon-canard.ico" />
    <script>L_PREFER_CANVAS = true;</script>
    <!-- Bootstrap Core CSS -->
    <link href="js/plugins/bs5-datepicker/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
	<link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/aiguillette.css" rel="stylesheet">
    <!--FONT AWESOME-->
    <link href="fontawesome-free-6.7.2-web/css/all.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<div class="d-flex w-100 h-100 bg-light "  >
    <div class="d-flex flex-column col-sm-4 col-md-4 bg-light sticky-top h-100" style="min-height:100vh;">
        <div class="d-flex flex-column justify-content-center align-items-center col-sm-4 col-md-4 h-100 w-100" style="min-height:100vh;background: repeat url('img/pdp.png');">
            <nav class="navbar navbar-expand-lg flex-grow-1">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link linkedL active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Marché</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Actus</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            <div class="d-flex justify-content-evenly w-100 m-2">
                <div class="d-flex"><a href="#"><i class="fa-brands fa-instagram text-dark fs-4 mx-2"></i></a></div>
                <div class="d-flex"><a href="#"><i class="fa-brands fa-facebook text-dark fs-4 mx-2"></i></a></div>
                <div class="d-flex"><a href="#"><i class="fa-brands fa-linkedin-in text-dark fs-4 mx-2"></i></a></div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column col-sm-8 col-md-8 bg-dark overflow-scroll" >
        <div class="d-flex justify-content-center">
            <h4 class="m-4 text-light">A force de se planter</h4>
        </div>
        <div class="d-flex justify-content-center flex-grow-1 " style="max-height:600px;overflow:hidden;">

<div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1712595600.jpeg" class="rounded m-auto d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/assiette2.png" class="d-block m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/1712595600.jpeg" class="d-block m-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
        <div class="d-flex justify-content-center">
            <h4 class="m-4 text-light">20 € | Dispo | Partager</h4>
        </div>
	</div>

</div>




<!-- JQuery -->
<script src="js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="js/plugins/bs5-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="js/plugins/bs5-datepicker/locales/bootstrap-datepicker.fr.min.js"></script>
<!-- FONT AWESOME -->
<script src="fontawesome-free-6.7.2-web/js/fontawesome.min.js" ></script>
<!-- Empty.js -->
<script type="text/javascript" src="js/template.js" ></script>
<script type="text/javascript">
//window.jQuery = $;
console.log('ola');
$(".navbar .nav-link").on("click", function(){
   $(".navbar").find(".active").removeClass("active");
   $(this).addClass("active");
});

</script>

  </body>
</html>
