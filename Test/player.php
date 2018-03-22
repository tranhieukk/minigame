<?php

class Player { 

    private $ipAdress ; 
     

    function __construct() {
        
       $this->setIPAdress();
    }
    function getIPAdress(){
        return   $this->ipAdress;
    }
    function setIPAdress(){
        $this->ipAdress = $_SERVER['REMOTE_ADDR'];
    }

   

   
} 
?>