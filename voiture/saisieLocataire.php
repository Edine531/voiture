<?php require_once("securite.php");
require_once("roleLocataire.php");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
    <title>Ajouter un locataire</title>
</head>

<body>
    <?php require_once("entete.php"); ?>
    <div class="col-md-12 col-xs-12 spacer">
        <div class="card spacer ">
            <div class="card-header">Ajouter locataire</div>
            <div class="card-body">
                <!--  contenu du formulaire -->
                <form method="post" action="saveLocataire.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nom:</label>
                        <input type="text" name="nom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Prenom:</label>
                        <input type="text" name="prenom" class="form-control" />
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