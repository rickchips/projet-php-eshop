<?php
namespace src\Controller;

use src\Entity\Article;
use src\Utilities\Database;

class FemmeController
{
    /**
     * Liste les différents produits de la table produit
     */
    public function femme()
    {
        // Connexion à la BDD
        $database = new Database();
        // Requête SQL
        $query = "SELECT * FROM `article` WHERE id_categorie = 1 OR id_categorie = 2";
        // Exécution de la requête SQL et récupération des produits
        $articles = $database->query($query, Article::class);
        // On retourne les produits dans un tableau
        return compact('articles');
    }
}

