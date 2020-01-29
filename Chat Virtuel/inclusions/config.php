<?php

/**
* Fichier permettant de stocker tout les chemins amenant au differents dossier ou fichier dont nous avons besoin pour le projet
*/


define('PROJET', 'Chat de Lucas'); // Nom du projet
define('VERSION', '1.0.0'); // Numéro de la version
define('BDD_HOTE', 'Localhost'); // Nom du serveur de données : localhost
define('BDD_PORT', '3306'); // Numéro du port
define('BDD_USER', 'root'); // Nom de l'utilisateur
define('BDD_PWD', ''); // Mot de passe de l'utilisateur
define('BDD_NOM', 'chat'); // Nom de la base de données


define('RACINE', realpath(__DIR__.'/..')); // Chemin du projet, nous pouvons avoir accès a tout depuis ce chemin
define('DOSS_INC', RACINE.'/inclusions'); // Chemin du dossier inclusions
define('DOSS_RESS', RACINE.'/ressources'); // Chemin du dossier ressources
define('DOSS_CSS', DOSS_RESS.'/css'); // Chemin du dossier css
define('DOSS_IMG', DOSS_RESS.'/images'); // Chemin du dossier images
define('DOSS_JS', DOSS_RESS.'/js'); // Chemin du dossier javascript
define('DOSS_INC_CONNEXION', DOSS_INC.'/inc_connexion.php'); // Chemin pour accéder au fichier inc_connexion.php
define('DOSS_INC_PARAMETREs', DOSS_INC.'/inc_parametres.php'); // Chemin pour accéder au fichier inc_parametres.php
?>