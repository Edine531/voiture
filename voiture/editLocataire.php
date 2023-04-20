<?php
// require_once("securite.php");
require_once("roleLocataire.php");


//récuperer le code de l'etudiant à editer
$code = $_GET['id'];
// Se connecter à la base de données
require_once("connexion.php");
// créer la requete de suppression
$ps = $pdo->prepare("SELECT * FROM locataire WHERE id=?");
// recup les params(1seul params) dans un tableau*
$params = array($code);
//executer la requete
$ps->execute($params);
//stocker le resultat dans une variable
$etudiant = $ps->fetch();
//mnt il me reste d'afficher l'etudiant dans un formulaire(regarder en bas)
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <title>Modifier locataire</title>
</head>

<body>
    <?php require_once("entete.php"); ?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer ">
            <div class="card-header">Modifier locataire</div>
            <div class="card-body">
                <!--  contenu du formulaire -->
                <form method="post" action="updateLocataire.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Id:</label>
                        <input type="hidden" name="id" value="<?php echo ($locataire['id']); ?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo ($locataire['nom']); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo ($locataire['email']); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" class="form-control" value="<?php echo ($locataire['prenom']) ?>" />
                    </div>
                    <div>
                        <button type="submit">Sauvgarder</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>