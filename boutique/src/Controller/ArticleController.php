<?php
namespace src\Controller;
use src\Entity\Article;
use src\Utilities\Database;



class ArticleController
{
    public function  article(): array{


    $database = new Database();

    $article = new Article($_POST['nom'], $_POST['description'], $_POST['prix']);
    $query = "INSERT INTO article (nom, description, prix) VALUES ('$nom','$description','$prix')";
    $database->exec($query);



}
}