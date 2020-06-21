<?php
try {
     $this->con= new PDO('mysql:host=localhost;dbname=imobi_bd','root','',array(PDO::ATTR_ERRMODE
             => PDO::ERRMODE_WARNING));
 } catch (Exception $e) {
    echo 'Exception reçue : ', $e->getMessage();
}
?>
