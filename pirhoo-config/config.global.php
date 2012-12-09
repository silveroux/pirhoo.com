<?php

    /** config.global.php
    * @author pierre.romera@gmail.com
    * @version 1.0
    */

    // permet d'afficher les messages d'erreur
     if( isset($_GET['debug']) ) {
         ini_set('display_errors', 1);
         ini_set('log_errors', 1);
         error_reporting(E_ALL);
     } else {
         ini_set('display_errors', 0);
         ini_set('log_errors', 0);
         error_reporting(null);         
     }

    // lance une session si celle-ci n'est pas déjà lancée
    if(session_id() == "") session_start();

    
    require_once("config.init.php")
?>