<?php
require_once("Models/Service.php");
session_start();

require_once("Models/ServiceService.php");
$serviceService=new ServiceService();

    
$ListeServices= $serviceService->listeServices();

$_SESSION['services']=$ListeServices;




?>