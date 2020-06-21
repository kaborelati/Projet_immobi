<?php

class personne{
    
    private $login;
    private $mdp;
    private $email;
    private $con;
    
    function getLogin() {
        return $this->login;
    }

    function getMdp() {
        return $this->mdp;
    }

    function getEmail() {
        return $this->email;
    }

    function getCon() {
        return $this->con;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCon($con) {
        $this->con = $con;
    }

    function __construct() {
        require 'database/connexion.php';
    }
        
      public function connect(){
          
          $req=$this->con->prepare('SELECT * FROM user where login=:lo AND mdp=:mp');
          $req->bindParam(':lo', $this->login);
          $req->bindParam(':mp',$this->mdp);
          $req->execute() or print_r($this->con->ErrorInfo());
          $sql=$req->fetchAll();
          return$sql;
          
          
          
          
      }  
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}


