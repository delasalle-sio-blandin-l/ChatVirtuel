<?php
 function connexionPDO() {
     $login = 'root'; 
     $mdp = ''; 
     $bd =  'cityacces_bdd';
     $serveur = 'localhost';

     try {
        $cnx = NEW PDO("mysql:host=$serveur; dbname=$bd", $login, $mdp); 
        return $cnx;
     }  catch (PDOException (e)) {
         print "Erreur de connexion PDO"; 
         die();
     }
 }
?>