<?php

    class Employee {
        private  $ID;
        private  $Matricule;
        private $Nom;
        private $Prenom;
        private $Grade;
        private $Service;
      
        public function __construct(){
           
        }
        public function setID($ID){
            $this->ID=$ID;
        }

        public function getID(){

            return $this->ID;
        }
      
        public function setNom($Nom){
            $this->Nom=$Nom;
        }
        public function getNom(){

            return $this->Nom;
        }
        public function setPrenom($Prenom){
            $this->Prenom=$Prenom;
        }
        public function getPrenom(){

            return $this->Prenom;
        }

        public function setMatricule($Matricule){
            $this->Matricule=$Matricule;
        }
        public function getMatricule(){

            return $this->Matricule;
        }
        
        
        public function setGrade($Grade){
            $this->Grade=$Grade;
        }
        public function getGrade(){

            return $this->Grade;
        }
       
        public function setService($Service){
            $this->Service=$Service;
        }
        public function getService(){

            return $this->Service;
        }

       
    


    }
?>