<?php
// récupérer les éléments saisis
$login = $_POST['login'];
$pass = md5($_POST['password']);
// Etablir la connexion vers la base de données
require_once("connexion.php");
// préparer la requete
$ps = $pdo->prepare("SELECT * FROM user WHERE login=? AND password=?");
$params = array($login, $pass);
$ps->execute($params);
// si l'utilisateur existe, on va lancer la session et puis on va sauvgarder lutilisateur
// dans la session en utilisant la collection $_SESSION
if ($user = $ps->fetch()) {
    //Démarrer la session
    session_start();
    // stocker l'utilisateur authentifié dans la variable session profil
    $_SESSION['PROFILE'] = $user;
    header("location:locataire.php");
} else {
    header("location:login.php");
}
