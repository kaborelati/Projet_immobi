<?php
session_start();
require 'models/usermodel.php';
class user{
    
    public function connecter(){
        
        $lat=new personne();
        
        if(isset($_POST['btn_env'])){
            $lat->setLogin(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING));
           $lat->setMdp(filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING));
           $ate=$lat->connect();
           $_SESSION['login']=$_POST['login'];
           $_SESSION['mdp']=$_POST['mdp'] ;        
          
          if ($ate) {

         header('location: http://localhost/Projet_immobi/router.php?c=accueil&m=page');
                die();
            } else {
                echo 'email et mot de pass incorrete';
            }
        }
        include 'views/connexion.php';
            
        }
        
            
        
    }
    
    
    
    
