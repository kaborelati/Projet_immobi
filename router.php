<?php
require 'controllers/usercontrollers.php';
require 'controllers/typecontrollers.php';
require 'controllers/contactcontrollers.php';
require 'controllers/agentcontrollers.php';
require 'controllers/clientcontrollers.php';
require 'controllers/maisoncontrollers.php';
require 'controllers/occupercontrollers.php';
require 'controllers/homecontrollers.php';
require 'controllers/quartierscontrollers.php';
require 'controllers/sitecontrollers.php';



if(isset($_GET['c']) AND isset($_GET['m'])){
    $cont=$_GET['c'];
    $focnt=$_GET['m'];
    
    $control= new $cont();
    $control->$focnt();
}





?>
