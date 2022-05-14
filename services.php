<?php 
require_once("Models/Service.php");
require_once('Controllers/chargerServicesController.php');



$ListeServices =null;




if(isset($_SESSION['servicesById']) and $_SESSION['servicesById'] != null){
	$ListeServices=$_SESSION['servicesById'];
	
}else{

$ListeServices = isset($_SESSION['services']) ? $_SESSION['services'] : [];
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gestion Services </title>
    <link href="Ressources/css/bootstrap.min.css" rel="stylesheet">
    <link href="Ressources/css/font-awesome.min.css" rel="stylesheet">
    <link href="Ressources/css/prettyPhoto.css" rel="stylesheet">
    <link href="Ressources/css/price-range.css" rel="stylesheet">
    <link href="Ressources/css/animate.css" rel="stylesheet">
	<link href="Ressources/css/main.css" rel="stylesheet">
	<link href="Ressources/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="Ressources/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Ressources/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Ressources/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Ressources/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="Ressources/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					
					
					
						
				
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Liste Services</h2>
						<table >
							<tr>
								<th>ID</th>
								<th>Nom service</th>
							
							</tr>
						<?php 
						if($ListeServices != null){
							foreach($ListeServices as $service){
												
							
						
							?>
							<tr>
								<td>
									<?=$service->getServiceID(); ?>
								</td>
								<td>
								<?=$service->getNomService(); ?>
								</td>
								

							</tr>
							<?php
							}
						}else{
						  echo 'Liste services Vide!';
						
						}
						
						?>
						
						<?php  ?>
						
						
						
						
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<?php
	
	?>
	

  
    <script src="Ressources/js/jquery.js"></script>
	<script src="Ressources/js/bootstrap.min.js"></script>
	<script src="Ressources/js/jquery.scrollUp.min.js"></script>
	<script src="Ressources/js/price-range.js"></script>
    <script src="Ressources/js/jquery.prettyPhoto.js"></script>
    <script src="Ressources/js/main.js"></script>
	<script src="scripts.js"></script>
	
</body>
</html>