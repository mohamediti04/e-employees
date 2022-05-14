<?php

    class Service {
        private  $ServiceID;
        private  $NomService;
        
      
        public function __construct(){
           
        }
        public function setServiceID($ServiceID){
            $this->ServiceID=$ServiceID;
        }

        public function getServiceID(){

            return $this->ServiceID;
        }
      
        public function setNomService($NomService){
            $this->NomService=$NomService;
        }
        public function getNomService(){

            return $this->NomService;
        }
        
    

       
    


    }
?>