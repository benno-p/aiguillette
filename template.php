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
	<link href="bootstrap-5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/aiguillette.css" rel="stylesheet">
    <!--FONT AWESOME-->
    <link href="fontawesome-free-6.7.2-web/css/all.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<div class="d-flex w-100 h-100 bg-light" style="min-height:100vh;">
	<div class="d-flex flex-column col-md-9 col-lg-10 bg-light " >
		<div class="d-flex justify-content-end  bg-dark sticky-top">
			<div class="m-2"><span class="text-light"><i class="fas fa-user"></i></span></div>
			<div class="m-2"><a class="logout text-light" href="php/logout.php" ><i class="fa fa-fw fa-power-off"></i> Déconnexion</a></div>
		</div>
        <div class="d-flex flex-column justify-content-end" style="">
            <div class="d-flex justify-content-start bg-light m-2 border-bottom ">
                <h2 class="bebas">Empty</h2>
                <div id="loader" class=" bg-success loader mx-4 d-flex flex-wrap align-content-center flex-grow-1 visible_s" style="margin-bottom: .5rem"></div>
            </div>
            
            <div class="d-flex bg-light ">
                
                

                
            </div>	
		</div>

		<div class="d-flex mt-auto justify-content-end align-items-center text-muted fixed-bottom">
			<kbd class="small">l'aiguillette mon Canard © <?php echo date("Y"); ?></kbd>
		</div>
	</div>

</div>


<!-- Bootstrap Core JavaScript -->
<script src="bootstrap-5.3.3/js/bootstrap.min.js"></script>
<script src="js/plugins/bs5-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="js/plugins/bs5-datepicker/locales/bootstrap-datepicker.fr.min.js"></script>
<!-- FONT AWESOME -->
<script src="fontawesome-free-6.7.2-web/js/fontawesome.min.js" ></script>
<!-- Empty.js -->
<script type="text/javascript" src="js/template.js" ></script>
<script type="text/javascript">



</script>

  </body>
</html>
