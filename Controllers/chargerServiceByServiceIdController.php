<?php
require_once("..//Models/Service.php");
session_start();

require_once("..//Models/ServiceService.php");
$serviceService=new ServiceService();
$ServiceID=$_GET['serviceID'];
    
$ListeServicesById= $serviceService->listeServiceByIdService($ServiceID);

$_SESSION['servicesById']=$ListeServicesById;

header('location:../services.php');



?>