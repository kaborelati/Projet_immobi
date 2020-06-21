<?php

class house {
     private $id_typ;
     private $libelle;
     private $con;
     
     
     function __construct() {
         require 'database/connexion.php';;
     }
    
     
     
     function getId_typ() {
         return $this->id_typ;
     }

     function getLibelle() {
         return $this->libelle;
     }

     function getCon() {
         return $this->con;
     }

     function setId_typ($id_typ) {
         $this->id_typ = $id_typ;
     }

     function setLibelle($libelle) {
         $this->libelle = $libelle;
     }

     function setCon($con) {
         $this->con = $con;
     }


     public function ajouter_type_maison(){
         
         $sql= $this->con->prepare('INSERT INTO type_maison SET libelle=:lib');
         $sql->bindParam(':lib', $this->libelle);
         $req=$sql->execute() or die(print_r($this->con->errorInfo()));
         
         if ($req) {
            ?>
            <script>
                alert("ajout effectué avec succès !");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("ajout non effectué !");
            </script>
            <?php
        }
         
         
     }
     
     
     
     public function liste_type_maison(){
         
         
        $sql= $this->con->prepare('SELECT * FROM type_maison ');
        $sql->execute();
        $req=$sql->fetchAll();
        return $req;
         
         
     }
     
     
     
    
}