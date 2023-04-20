
<?php
// require_once("securite.php");
require_once("roleLocataire.php");


//récuperer le code de l'etudiant à supprimer
$code = $_GET['id'];
// Se connecter à la base de données
require_once("connexion.php");
// créer la requete de suppression
$p = $pdo->prepare("DELETE FROM locataire WHERE id=?");
// recup les params(1seul params) dans un tableau*
$params = array($code);
//executer la requete
$p->execute($params);
//rediriger vers la liste des etudiants
header("location:locataire.php");


?>