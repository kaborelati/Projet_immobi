<?php
class fonction{
    
    public function index(){
        $home=new haus();
        
        
        
        $quatier_liste=$home->liste_quartier();
        
       $type_maison_listen=$home->liste_maison_type();
        include 'views/index.php';  
        
    }
    
    
}
