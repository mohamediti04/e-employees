<?php
require_once("Connexion.php");
require_once("Employee.php");
class EmployeeService{
    private  $DbConnectInstance=null;


    public function __constrcut(){
        //construct
    }
    public function listeEmployees(){
        $ListeEmployees=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from tbl_employee");
                $reponse->execute();
                            $index=0;
            
                    while($employee=$reponse->fetch()){
                        $IDEmployee=$employee['ID'];
                        $Matricule=$employee['Matricule'];
                        $Nom=$employee['Nom'];
                        $Prenom=$employee['Prenom'];
                        $Grade=$employee['Grade'];
                        $Service=$employee['service'];
                        
                       
                                        
                        $Employee=new Employee();
                        $Employee->setID($IDEmployee);
                        $Employee->setNom($Nom);
                        $Employee->setPrenom($Prenom);
                        $Employee->setGrade($Grade);
                        $Employee->setService($Service);
                        $Employee->setMatricule($Matricule);
                    
                       
                       
                           $ListeEmployees[$index]= $Employee; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeEmployees;
                
            } catch (Exception $e) {
                die("Error Liste Employee=> ".$e->getMessage());
                return $ListeEmployees;
              }

    }


    public function listeEmployeesById($Id){
        $ListeEmployees=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from tbl_employee where ID =$Id");
                $reponse->execute();
                            $index=0;
            
                    while($employee=$reponse->fetch()){
                        $IDEmployee=$employee['ID'];
                        $Matricule=$employee['Matricule'];
                        $Nom=$employee['Nom'];
                        $Prenom=$employee['Prenom'];
                        $Grade=$employee['Grade'];
                        $Service=$employee['service'];
                        
                       
                                        
                        $Employee=new Employee();
                        $Employee->setID($IDEmployee);
                        $Employee->setNom($Nom);
                        $Employee->setPrenom($Prenom);
                        $Employee->setGrade($Grade);
                        $Employee->setService($Service);
                        $Employee->setMatricule($Matricule);
                    
                       
                       
                           $ListeEmployees[$index]= $Employee; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeEmployees;
                
            } catch (Exception $e) {
                die("Error Liste Employee=> ".$e->getMessage());
                return $ListeEmployees;
              }

    }
   
}
?>