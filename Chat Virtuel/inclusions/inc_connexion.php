<?php
// essai de connexion à la base de données MySQL avec les paramètres du fichier inc_parametres.php
try
{
	$cnx = new PDO('mysql:host='.BDD_HOTE.';port='.BDD_PORT.';dbname='.BDD_NOM,BDD_USER,BDD_PWD);
}
// affichage de l'erreur en cas de mauvaise connexion à la base de données MySQL
catch (Exception $e)
{
	echo 'Erreur : '.$e->getMessage().'</br/>';
	echo 'N° : '.$e->getCode();
}						
?>