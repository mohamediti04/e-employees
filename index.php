<?php 
require_once("Models/Employee.php");
require_once('Controllers/chargerEmployeesController.php');



$ListeEmployees =null;
$ListeEmployees = isset($_SESSION['employees']) ? $_SESSION['employees'] : [];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gestion Employees </title>
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
						<h2 class="title text-center">Liste Employees</h2>
						<table class="table"  id="color" >
							<tr>
								<th>ID</th>
								<th>Matricule</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Grade</th>
								<th>Detail Service</th>
								<th>Grivest Oui/Non<th>


							</tr>
						<?php 
						if($ListeEmployees != null){
							foreach($ListeEmployees as $employee){
												
							
						
							?>
							<tr>
								<td>
									<?=$employee->getID(); ?>
								</td>
								<td>
								<?=$employee->getMatricule(); ?>
								</td>
								<td>
								<?=$employee->getNom(); ?>
								</td>
								<td>
								<?=$employee->getPrenom(); ?>
								</td>
								<td><?=$employee->getGrade(); ?></td>
								<td><?= $employee->getService(); ?></td>
								<td>
									<button class="btn btn-success">Voir Detail </button>
								<td>
									<td>
										<input type="checkbox" id="<?=$employee->getID(); ?>" value="<?=$employee->getID(); ?>"  />
							</td>

							</tr>
							<?php
							}
						}else{
						  echo 'Liste employees Vide!';
						
						}
						
						?>
						
						<?php  ?>
						
						
					</table>
						
						
					</div>
					<input type="button" id="btnClick" value="Get" />
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