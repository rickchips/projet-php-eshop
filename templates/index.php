<?php
session_start();
require 'inc/header.php';
use src\Controller\IndexController;
// On récupère notre contrôleur
$controller = new IndexController();
// On récupère les données de l'index
$datas = $controller->index();
// On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);


?>


<main class="container">


    <h1 class="mt-2">Collection</h1>
    <section class="row">
        <?php foreach ($articles as $article) : ?>
<div class="grid">
    <figure class="effect-milo">
        <img src="/img/upload/<?= $article->getImage_Name(); ?>" class="card-img-top" alt="Image de <?= $article->getNom(); ?>">
        <figcaption>
            <h2><?= $article->getNom(); ?> </h2>
            <h4><?= "€" . $article->getPrix_Article(); ?></h4>
            <p class="card-text"><?= $article->getDescription_Article(); ?></p>
            <a href="#">Ajouter au panier</a>
        </figcaption>
    </figure>
</div>
        <?php endforeach; ?>
    </section>
</main>

<?php require 'inc/footer.php'; ?>


