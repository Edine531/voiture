<?php require_once("securite.php");
require_once("roleLocataire.php");


// récuperer les données saisies par l'utilisateur AVEC LE CODE AUSSI
$nom = $_POST['nom'];
$email = $_POST['email'];
$prenom = $_POST['prenom'];

// se connecter à la base de données
require_once("connexion.php");
if ($prenom == "") {
    // créer objet prepare statment $ps.. je vais update dans la table etudiant, le nom email sans photo
    $ps = $pdo->prepare("UPDATE  locataire SET nom=?, email=?, prenom=? WHERE id=?");
    // stocker les params(dans l'ordre) dans un  tableau
    $params = array($nom, $email, $code);
    //Executer la requete + transferer les parametres dans l'ordre
    $ps->execute($params); // les données sont stockées dans la base de données.
} else {
    
    // deplacer le fichier temporel vers le dossier images de notre application
   
    // Envoie des données vers la BD

    // créer objet prepare statment $ps.. je vais update dans la table etudiant, le nom email photo
    $ps = $pdo->prepare("UPDATE  locataire SET nom=?, email=?, prenom=? WHERE id=?");
    // stocker les params(dans l'ordre) dans un  tableau
    $params = array($nom, $email, $prenom, $code);
    //Executer la requete + transferer les parametres dans l'ordre
    $ps->execute($params); // les données sont stockées dans la base de données.
}

// rediriger : revenir vers l'apache pour afficher les etudiants
header("location:locataire.php");


