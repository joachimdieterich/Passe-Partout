
<?php

	include("../connexion/logs.php");
	require_once("../connexion/SQLconnect.php");

	// succes/echec de la requete
	$_SESSION['deleted_Defi'] = true;

	//id du défi à supprimer
	$defiId = htmlspecialchars($_POST['idDefi']);
	// type du défi à supprimer
	$defiType = htmlspecialchars($_POST['typeDefi']);
	$idOwner = htmlspecialchars($_POST['idOwner']);

	switch ($defiType) {
		case 'Qcm':
			if (!($req = $con->prepare("DELETE FROM QCM WHERE id = ?"))) {
				echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
				$_SESSION['deleted_Defi'] = false;
			}else{
				$req1 = $con->prepare("UPDATE Utilisateur SET score = score - 200 WHERE id = ?");
				$req1->bind_param("i", $idOwner);
				if (!$req1->execute()) {
				     echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
				}
			}
			break;
		case 'Trou':
			if (!($req = $con->prepare("DELETE FROM TexteTrous WHERE id = ?"))) {
				echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
				$_SESSION['deleted_Defi'] = false;
			}else{
				$req1 = $con->prepare("UPDATE Utilisateur SET score = score - 200 WHERE id = ?");
				$req1->bind_param("i", $idOwner);
				if (!$req1->execute()) {
				     echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
				}
			}
			break;
		case 'Vocal':
			if (!($req = $con->prepare("DELETE FROM VocalTexte WHERE id = ?"))) {
				echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
				$_SESSION['deleted_Defi'] = false;
			}else{
				$req1 = $con->prepare("UPDATE Utilisateur SET score = score - 200 WHERE id = ?");
				$req1->bind_param("i", $idOwner);
				if (!$req1->execute()) {
				     echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
				}
			}
			break;
		case 'Frise':
			if (!($req = $con->prepare("DELETE FROM FriseChrono WHERE id = ?"))) {
				echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
				$_SESSION['deleted_Defi'] = false;
			}else{
				$req1 = $con->prepare("UPDATE Utilisateur SET score = score - 350 WHERE id = ?");
				$req1->bind_param("i", $idOwner);
				if (!$req1->execute()) {
				     echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
				}
			}
			break;
		case 'Classement':
			if (!($req = $con->prepare("DELETE FROM DefiClassement WHERE id = ?"))) {
				echo "Echec de la préparation : (" . $con->errno . ") " . $con->error;
				$_SESSION['deleted_Defi'] = false;
			}else{
				$req1 = $con->prepare("UPDATE Utilisateur SET score = score - 350 WHERE id = ?");
				$req1->bind_param("i", $idOwner);
				if (!$req1->execute()) {
				     echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
				}
			}
			break;
	}

	if (!$req->bind_param("i", $defiId)) {
	    echo "Echec lors du liage des paramètres : (" . $con->errno . ") " . $con->error;
	    $_SESSION['deleted_Defi'] = false;
	}
	
	if (!$req->execute()) {
	    echo "Echec lors de l'exécution de la requête : (" . $con->errno . ") " . $con->error;
	    $_SESSION['deleted_Defi'] = false;
	}
	$req->close();

	//--------------------1--------------------------//

?>