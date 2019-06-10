<?php

use src\Controller\ArticleController;



// On récupère notre contrôleur
$controller = new ArticleController();
// On récupère les données de l'index
$datas = $controller->article();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

require 'inc/header.php';

?>

    <main class="container">



        <h1>Ajout de produit</h1>

        <form method="post">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text"
                       class="form-control"
                       id="nom" name="nom" value="<?= $_POST['nom'] ?? '' ?>">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text"
                       class="form-control"
                       id="description" name=description" value="<?= $_POST['description'] ?? '' ?>">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="text"
                       class="form-control"
                       id="prix" name="prix" value="<?= $_POST['prix'] ?? '' ?>">
                <div class="invalid-feedback"></div>
            </div>



            <input type="submit" value="Soumettre" class="btn btn-outline-success">

        </form>

    </main>
<?php require 'inc/footer.php'; ?>