/**
* Permet de recuperer le pseudo stocké dans le localStorage pour l'afficher dans l'input ayant un id='pseudo'
*/

function recupererPseudo() {

	var pseudo = 'pseudo';

	if(typeof localStorage!='undefined' && pseudo in localStorage) 
	{ 
    	document.getElementById(pseudo).value = localStorage.getItem(pseudo);
	}
}

recupererPseudo();