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
            <h4 class="m-4 text-light">L'aiguillette mon canard</h4>
        </div>
        <div class="d-flex flex-wrap w-100 ">

            <!--img A -->
            <div class="col-sm-12 col-md-6 " style="">
                <a href="exemple_page.php" class="link-offset-2 link-underline link-underline-opacity-0">
                    <div class="card m-2 border border-0 rounded-0" style="">
                        <img src="img/1712595600.jpeg" class="card-img-top" style="object-fit: cover;max-height:400px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title colorMain">A Force de se planter</h5>
                            <p class="card-text justify-content-end colorMain">04-03-2025</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--img B -->
            <div class="col-sm-12 col-md-6 " style="">
                <a href="exemple_page.php" class="link-offset-2 link-underline link-underline-opacity-0">
                    <div class="card m-2 border border-0 rounded-0" style="">
                        <img src="img/c.png" class="card-img-top" style="object-fit: cover;max-height:400px;" alt="...">
                        <div class="card-body bg-dark bg-opacity-100">
                            <h5 class="card-title colorMain">Poulpy</h5>
                            <p class="card-text justify-content-end colorMain">04-03-2025</p>
                        </div>
                    </div>
                </a>
            </div>
            <!--img C -->
            <div class="col-sm-12 col-md-6 " style="">
                <a href="exemple_page.php" class="link-offset-2 link-underline link-underline-opacity-0">
                    <div class="card m-2 border border-0 rounded-0" style="">
                        <img src="img/c.png" class="card-img-top" style="object-fit: cover;max-height:400px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title colorMain">Poulpy</h5>
                            <p class="card-text justify-content-end colorMain">04-03-2025</p>
                        </div>
                    </div>
                </a>
            </div>




        </div>
	</div>

</div>







<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <button class="button share_facebook" data-url="https://superceval.fr">
                            <i class="fa-brands fa-facebook text-dark fs-4 mx-2"></i>
    Partager sur facebook
</button>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
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





var popupCenter = function(url, title, width, height){
        var popupWidth = width || 640;
        var popupHeight = height || 320;
        var windowLeft = window.screenLeft || window.screenX;
        var windowTop = window.screenTop || window.screenY;
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;
        var popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2 ;
        var popupTop = windowTop + windowHeight / 2 - popupHeight / 2;
        var popup = window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft);
        popup.focus();
        return true;
    };
document.querySelector('.share_facebook').addEventListener('click', function(e){
        e.preventDefault();
        var url = this.getAttribute('data-url');
        var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
        popupCenter(shareUrl, "Partager sur facebook");
    });


</script>

  </body>
</html>
