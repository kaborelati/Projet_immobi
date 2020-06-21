<?php
class quartiers{
    
    private $id_quart;
    private $libelle;
    private $con;
    
    function __construct() {
        
        require 'database/connexion.php';
    }
    function getId_quart() {
        return $this->id_quart;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getCon() {
        return $this->con;
    }

    function setId_quart($id_quart) {
        $this->id_quart = $id_quart;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setCon($con) {
        $this->con = $con;
    }

    public function ajout_quartier(){
        
        $sql= $this->con->prepare('INSERT INTO quartier SET libelle=:lib ');
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
    
    	
    
}

