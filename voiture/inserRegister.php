<?php
// récupérer les éléments saisis
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];
// Etablir la connexion vers la base de données
require_once("connexion.php");
// préparer la requete
$ps = $pdo->prepare("INSERT INTO user VALUES (?, ?, ?, ? )");
$params = array($nom, $prenom, $email, $password);
$ps->execute($params);
// si l'utilisateur existe, on va lancer la session et puis on va sauvgarder lutilisateur
// dans la session en utilisant la collection $_SESSION
header("location:login.php");

