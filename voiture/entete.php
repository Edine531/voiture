<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
    <ul class="navbar-nav">

        <li class="nav-item " <?php if (isset($_SESSION['PROFILE'])) { ?>>
            <a class="nav-link" href="locataire.php">Etudiants</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="saisieLocataire.php">Saisie</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logOut.php">Se déconnecter</a>
        </li>
    <?php } ?>
    <li class="nav-item" <?php if (!isset($_SESSION['PROFILE'])) { ?>>
        <a class="nav-link" href="login.php">Se connecter </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">s'inscrire </a>
    </li>
<?php } ?>

    </ul>
</nav>