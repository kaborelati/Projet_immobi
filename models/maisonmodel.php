<?php
class haus{
    private $id_mai;
    private $descrip;
    private $quartier;
    private $prix;
    private $tym;
    private $con;
            
    function __construct() {
        require 'database/connexion.php';
    }
    
    function getId_mai() {
        return $this->id_mai;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function getQuartier() {
        return $this->quartier;
    }

    function getPrix() {
        return $this->prix;
    }

    function getTym() {
        return $this->tym;
    }

    function setId_mai($id_mai) {
        $this->id_mai = $id_mai;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }

    function setQuartier($quartier) {
        $this->quartier = $quartier;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setTym($tym) {
        $this->tym = $tym;
    }
    
    
    
    public function ajouter_maison(){
        
        $sql= $this->con->prepare('INSERT INTO maison SET descrip=:desc,quartier=:quartier,prix=:prix,tym=:type ');
        $sql->bindParam(':desc', $this->descrip);
        $sql->bindParam(':quartier', $this->quartier);
        $sql->bindParam(':prix', $this->prix);
        $sql->bindParam(':type', $this->tym);
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
    
    
    public function liste_quartier(){
        
        $sql= $this->con->prepare('SELECT * FROM quartier');
        $sql->execute();
        $req=$sql->fetchAll();
        return $req;
        
        
        
        
    }
    
    
    
    
    
     public function liste_maison_type(){
         
         
        $sql= $this->con->prepare('SELECT * FROM type_maison ');
        $sql->execute();
        $req=$sql->fetchAll();
        return $req;
         
         
     }
    
    


    
    
    
    
}