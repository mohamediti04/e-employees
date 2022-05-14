<?php
require_once("Models/Employee.php");
session_start();

require_once("Models/EmployeeService.php");
$employeeService=new EmployeeService();

    
$ListeEmployees= $employeeService->listeEmployees();

$_SESSION['employees']=$ListeEmployees;




?>