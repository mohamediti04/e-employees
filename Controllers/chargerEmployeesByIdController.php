<?php
require_once("..//Models/Employee.php");
session_start();

require_once("..//Models/EmployeeService.php");
$employeeService=new EmployeeService();

$EmployeesIds=$_GET['employeesIds'];
$array = explode(',', $EmployeesIds);

print_r($array);
//$ListeEmployeesById= $employeeService->listeEmployeesById($Id);

//$_SESSION['employeesById']=$ListeEmployeesById;




?>