<?php
// require_once("securite.php");
require_once("connexion.php");
$req = "SELECT * FROM locataire";
$ps = $pdo->prepare($req);
$ps->execute();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <title>Liste des locataire</title>
</head>

<body>
    <?php require_once("entete.php"); ?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer ">
            <div class="card-header">La liste des locataires</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Prenom</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($etudiant = $ps->fetch()) { ?>
                            <tr>
                                <td><?php echo ($locataire['id']) ?></td>
                                <td><?php echo ($locataire['nom']) ?></td>
                                <td><?php echo ($locataire['email']) ?></td>
                                <td><?php echo ($locataire['prenom']) ?></td>
                                <td <?php if ($_SESSION['PROFILE']['ROLE'] == "k-rten") {  ?>>
                                    <a href="editLocation.php?code=<?php echo ($locataire['id']) ?>">Modifier</a>
                                </td>
                                <td><a onclick="return confirm('Etes vous sure..?');" href="deleteLocataire.php?id=<?php echo ($locataire['id']) ?>">Supprimer</a></td>
                            <?php } else {
                            ?>
                                <td></td>
                                <td></td>

                            <?php }
                            ?>



                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>