<?php

	include("../connexion/logs.php");
	require_once("../connexion/SQLconnect.php");
	require('../connexion/securite.php');

	//récupération des valeurs du formulaire
	$nomClasse = htmlspecialchars($_POST['className']);
	$nbEnfant = htmlspecialchars($_POST['nbClassChild']);
	$ed = htmlspecialchars($_POST['edClasse']);
	//id session prof
	$sessionId = $_SESSION['user']['id'];

	//--------------------1--------------------------//
	// si champs nom classe + nb enfant sont rempli
	if( !empty($_POST['className']) && !empty($_POST['nbClassChild']) && !empty($_POST['edClasse']) ) {
		// insert into professeur nom_ecole
		if (!($req = $con->prepare("INSERT INTO Classe (nom_classe, id_prof, nb_enfant, ed) VALUES (?, ?, ?, ?)"))) {
			echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
		}

		if (!$req->bind_param("siis", $nomClasse, $sessionId, $nbEnfant, $ed)) {
		    echo "Echec lors du liage des paramètres : (" . $con->errno . ") " . $con->error;
		}
		
		if (!$req->execute()) {
		    echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
		}
		$req->close();
	}
	//--------------------1--------------------------//

?>

<script type="text/javascript">window.location.replace("../vue/gestionProfAjout.php")</script>