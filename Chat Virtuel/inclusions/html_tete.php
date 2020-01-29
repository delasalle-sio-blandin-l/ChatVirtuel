<!DOCTYPE html>
<html lang="fr">
	<head>
		<title><?= PROJET ?></title>
		<!-- On ouvre la fenêtre à la largeur de l'écran -->
		<meta  name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta charset="utf-8">
		<!-- la fonction filemtime permet de gérer le cache automatiquement pour éviter a l'utilisateur d'utiliser le ctrl f5 -->
		<link href="ressources/css/index.css?<?= filemtime(DOSS_CSS.'/index.css') ?>" rel="stylesheet"  type="text/css">
	</head>
<body>