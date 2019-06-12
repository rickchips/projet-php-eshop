<!doctype html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Laila&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
    <a class="navbar-brand" href="/index.php"><img src="img/logo.png" alt="" style="width: 60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Boutique</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/femme">Femme</a>
                    <a class="dropdown-item" href="/homme">Homme</a>
                    <a class="dropdown-item" href="/accessoires">Accessoires</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Salon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/inscription">Inscription</a>
            </li>
            <li style="position: absolute; top:40%; right:10%">
                <p><?php
                if (!empty($_SESSION['prenom'])){
                    echo "Bienvenue " . "<strong>" . $_SESSION['prenom'] . "</strong>";
                } ?><p>
            </li>


        </ul>
    </div>
</nav>


