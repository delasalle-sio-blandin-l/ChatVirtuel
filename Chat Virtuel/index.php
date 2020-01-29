<?php  	

//Inclusions de tout les fichiers via des require_once
require_once __DIR__.'/inclusions/config.php';
require_once DOSS_INC.'/inc_connexion.php';
require_once DOSS_INC.'/html_tete.php'; 



// Insertion des informations dans la bdd si les champs ne sont pas vides 
if( isset($_POST['pseudo'], $_POST['message']) AND strlen($_POST['pseudo']) < 9 AND strlen($_POST['message']) < 201)
{
	$pseudo = $_POST['pseudo'];
	$message = $_POST['message'];

	$insertmsg = $cnx->prepare('INSERT INTO chat(pseudo, message) VALUES (?, ?)');
	$insertmsg->execute(array($pseudo, $message));

	header("Location:index.php");
	exit();
}



?>
<h1>Chat en ligne</h1>
<div class="container">
	<!-- formulaire de saisie du pseudo et du message avec un bouton envoyer pour afficher son message et pseudo -->
	<form method="POST">
		<!-- oninput="localStorage.pseudo=this.value" permet de sauvegarder le pseudo dans le localStorage -->
		<label>Pseudo</label><input oninput="localStorage.pseudo=this.value" type="text" id="pseudo" name="pseudo" maxlength="8" size="12" required>
		<label>Message</label><textarea name="message" maxlength="200"  rows="5" cols="33" placeholder="Entrez votre message" required></textarea>
		<button type="submit" id="submit" class="submit-button">Envoyer</button>
	</form>

	<div class="messages">
		<?php
		// Affichage des messages stocké dans la bdd dans l'ordre décroissant sur la page index.php
		$allmsg = $cnx->query('SELECT * FROM chat ORDER BY id DESC');
		while ($msg = $allmsg->fetch())
		{
			
			echo '<b>' .$msg['pseudo'].' : </b>' .$msg['message']. '<br>';
		}
		?>
	</div>
</div>



<?php require_once DOSS_INC.'/html_pied.php'; ?>