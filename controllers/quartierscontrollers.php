<?php
require 'models/quartmodel.php';
class quartier{
  public function ajout(){
       $tierka=new quartiers(); 
       
       
       if (isset($_POST['enregistre'])) {
           
         $tierka->setLibelle(filter_input(INPUT_POST, 'libel', FILTER_SANITIZE_STRING));
         $tierka->ajout_quartier();
           
       }
       
     
       
        include 'views/quartier.php';
  






}

        }