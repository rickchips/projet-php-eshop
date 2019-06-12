<?php
namespace src\Controller;
use src\Entity\Client;
use src\Utilities\Database;
use src\Utilities\FormValidator;



class InscriptionController
{

    public function  inscription(): array{

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$errorMessagePrenom = FormValidator::checkPostText('prenom_client', 128);
$errorMessageNom = FormValidator::checkPostText('nom_client', 255);
$errorMessageAdresse = FormValidator::checkPostText('adresse_client', 255);
$errorMessageAdresseCompl = FormValidator::checkPostText('adresse_compl_client', 255);
$errorMessageCP = FormValidator::checkPostText('cp_client', 255);
$errorMessageVille = FormValidator::checkPostText('ville_client', 255);
$errorMessageEmail = FormValidator::checkPostText('email_client', 255);
$errorMessageMDP = FormValidator::checkPostText('mdp_client', 255);

if (empty($errorMessagePrenom) &&
empty($errorMessageNom) &&
empty($errorMessageAdresse) && empty($errorMessageAdresseCompl) && empty($errorMessageCP) && empty($errorMessageVille) && empty($errorMessageEmail) && empty($errorMessageMDP)
) {
    // Il n'y a pas d'erreur, on passe à l'inscription
    $database = new Database();
    // $database->connect(); appelé directement dans le constructeur

    // On crée un utilisateur en local
    $client = new Client($_POST['prenom_client'], $_POST['nom_client'],
        $_POST['adresse_client'],$_POST['adresse_compl_client'],$_POST['cp_client'],$_POST['ville_client'],
        $_POST['email_client'],$_POST['mdp_client']);

    $query = "INSERT INTO client (prenom_client, nom_client, adresse_client, adresse_compl_client, cp_client, ville_client, email_client, mdp_client) VALUES (" .
        $client->getStrParamsSQL() .
        ")";

    try {
       $success = $database->exec($query);
       var_dump($success);
    } catch (\PDOException $e) {
            $code = $e->getCode();
            //var_dump($e);
        if ($code === '23000') {
            $errorMessageEmail = 'Email déjà utilisé';
        } else {
        throw new \Exception('PDOException dans InscriptionController');        }
    }
    if($success === 1) {
        header("Location: http://localhost:8888");
        $_SESSION['prenom'] = $_POST['prenom_client'];
    }
    }


}
        return compact('errorMessagePrenom','errorMessageNom','errorMessageAdresse','errorMessageAdresseCompl','errorMessageCP','errorMessageVille', 'errorMessageEmail','errorMessageMDP', 'success', 'client');

}

}
