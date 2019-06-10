<?php
namespace src\Controller;
use src\Entity\Article;
use src\Utilities\Database;



class ArticleController
{
    public function  article(): array{


    $database = new Database();
    // $database->connect(); appelé directement dans le constructeur

    // On crée un utilisateur en local
    $article = new Article($_POST['nom'], $_POST['description'], $_POST['prix']);
    $nom=$_POST['nom'];
    $description=$_POST['description'];
    $prix=$_POST['prix'];
    $query = "INSERT INTO article (nom, description, prix) VALUES ('$nom','$description','$prix'";
    $database->exec($query);



}
}