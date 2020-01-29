<?php 
include "fonction.php"; 

if (isset($_REQUEST["operation"])) {

    if($_REQUEST["operation"] == "dernier") {

        try {
            print("dernier%");     
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from utilisateur order by pseudo desc");
        } catch (PDOException $e) {
            print "Ereur !".$e->getMessage();
            die();
        } 

    } elseif($_REQUEST["operation"] == "enreg") {

        try {

        } catch (PDOException $e) {
            print "Ereur !".$e->getMessage();
            die();
        } 
    }
}