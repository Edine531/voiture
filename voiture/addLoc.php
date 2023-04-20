<?php
$nom = $_POST("login");
$email = $_POST("email");
$prenom = $_POST("prenom");

require_once("connexion.php");

$ps = $pdo->prepare("INSERT INTO locataire(nom,email,prenom) VALUES(?,?,?)");

$data = array($nom,$email,$prenom);

$ps->execute($data);

header("location:locataire.php");

?>