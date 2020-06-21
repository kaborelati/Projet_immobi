<?php
require 'models/maisonmodel.php';
class maison{
    
    public function eng(){
        $home=new haus();
        if(isset($_POST['envoyer'])){
            
            $home->setTym(filter_input(INPUT_POST,'sai_type',FILTER_SANITIZE_STRING ));
            $home->setQuartier(filter_input(INPUT_POST,'sai_quartier',FILTER_SANITIZE_STRING));
             $home->setPrix(filter_input(INPUT_POST,'sai_prix',FILTER_SANITIZE_STRING));
            $home->setDescrip(filter_input(INPUT_POST,'desc',FILTER_SANITIZE_STRING));
            
             $home->ajouter_maison();
    
            
            
            
        }
        $quatier_liste=$home->liste_quartier();
       $type_maison_listen=$home->liste_maison_type();
        
        include 'views/maison.php';    
        
    }
    
    
    
    
    
    
    
}