<?php require_once("securite.php");
require_once("roleLocataire.php");

require_once("connexion.php");
// créer objet prepare statment $ps.. je vais inserer dans la table etudiant, le nom email photo
$ps = $pdo->prepare("INSERT INTO locataire(nom,email,prenom) VALUES ( ?,?,?)");
// stocker les params(dans l'ordre) dans un  tableau
$params = array($nom, $email, $prenom);
//Executer la requete + transferer les parametres dans l'ordre
$ps->execute($params); // les données sont stockées dans la base de données.
// rediriger : revenir vers l'apache pour afficher les etudiants
header("location:locataire.php");
