<?php
require 'models/typemodel.php';
class type{
  public function ajout(){
       $type_maison=new house(); 
       
       
       if (isset($_POST['enregistre'])) {
           
         $type_maison->setLibelle(filter_input(INPUT_POST, 'lib', FILTER_SANITIZE_STRING));
         $type_maison->ajouter_type_maison();
           
       }
       
     
       
        include 'views/type.php';
  






}

        }