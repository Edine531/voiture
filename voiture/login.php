<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>
    <?php require_once("entete.php") ?>
    <div class="container  spacer col-md-6 col-xs-12">
        <div class="card">
            <div class="card-header"> Authentification</div>
            <div class="card-body">
                <!--  contenu du formulaire -->
                <form method="post" action="authentifier.php">
                    <div class="form-group">
                        <label>Login:</label>
                        <input type="text" name="login" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Mot de passe:</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <div>
                        <button type="submit">se connecter</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>