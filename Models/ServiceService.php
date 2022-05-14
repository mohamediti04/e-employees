<?php
require_once("Connexion.php");
require_once("Service.php");
class ServiceService{
    private  $DbConnectInstance=null;


    public function __constrcut(){
        //construct
    }
    public function listeServices(){
        $ListeServices=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from tbl_service");
                $reponse->execute();
                            $index=0;
            
                    while($service=$reponse->fetch()){
                        $IDService=$service['id_service'];
                        $NomService=$service['nom_service'];
                        $Service=new Service();
                        $Service->setServiceID($IDService);
                        $Service->setNomService($NomService);
                     
                           $ListeServices[$index]= $Service; 
                          $index++;
                
                }
                $reponse->closeCursor();
                return $ListeServices;
                
            } catch (Exception $e) {
                die("Error Liste Service=> ".$e->getMessage());
                return $ListeServices;
              }

    }
   


    public function listeServiceByIdService($ServiceID){
        $ListeServices=array();
            try{
                 // Create connection
  $con = new Connexion();
  $this->DbConnectInstance=$con->getConnexionInstance();
                $reponse=$this->DbConnectInstance->prepare("select * from tbl_service where id_service =$ServiceID");
                $reponse->execute();
                            $index=0;
            
                    while($service=$reponse->fetch()){
                        $IDService=$service['id_service'];
                        $NomService=$service['nom_service'];
                        $Service=new Service();
                        $Service->setServiceID($IDService);
                        $Service->setNomService($NomService);
                     
                           $ListeServices[$index]= $Service; 
                          break;
                
                }
                $reponse->closeCursor();
                return $ListeServices;
                
            } catch (Exception $e) {
                die("Error Liste Service=> ".$e->getMessage());
                return $ListeServices;
              }

    }

}
?>