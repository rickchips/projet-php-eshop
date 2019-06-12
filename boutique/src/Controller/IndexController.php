<?php
namespace src\Controller;

use src\Entity\Article;
use src\Utilities\Database;

class IndexController
{
    /**
     * Liste les différents produits de la table produit
     */
    public function index()
    {
        // Connexion à la BDD
        $database = new Database();
        // Requête SQL
        $query = "SELECT * FROM article";
        // Exécution de la requête SQL et récupération des produits
        $articles = $database->query($query, Article::class);
        // On retourne les produits dans un tableau
        return compact('articles');
    }
}

