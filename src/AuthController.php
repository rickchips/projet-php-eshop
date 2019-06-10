<?php
namespace  src\Controller;

use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class AuthController
{
    /**
     * @return array
     */
    public function connect(): array
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errorMessageEmail = FormValidator::checkPostText('email', 255);
            $errorMessagePassword = FormValidator::checkPostText('password', 128);

            if (empty($errorMessageEmail) &&
                empty($errorMessagePassword)
            ) {
                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur

                // On crée un utilisateur en local
                $user = new User('', $_POST['email'], $_POST['password']);
                return [];
            }
        }
        return [];
    }
}