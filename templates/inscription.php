<?php
session_start();
use src\Controller\InscriptionController;

$controller = new InscriptionController();
$datas = $controller->inscription();
extract($datas);

require 'inc/header.php';

?>

    <main class="container">

        <h1>Inscription</h1>

        <form method="post">
             <div class="form-group">
                <label for="prenom_client">Prenom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessagePrenom) && !empty($errorMessagePrenom)) ? 'is-invalid' : '' ?>"
                       id="prenom_client" name="prenom_client" value="<?= $_POST['prenom_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessagePrenom ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="nom_client">Nom</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageNom) && !empty($errorMessageNom)) ? 'is-invalid' : '' ?>"
                       id="nom_client" name="nom_client" value="<?= $_POST['nom_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageNom ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="adresse_client">Adresse</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageAdresse) && !empty($errorMessageAdresse)) ? 'is-invalid' : '' ?>"
                       id="adresse_client" name="adresse_client" value="<?= $_POST['adresse_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageAdresse ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="adresse_compl_client">Complément</label>
            <input type="text"
                   class="form-control <?= (isset($errorMessageAdresseCompl) && !empty($errorMessageAdresseCompl)) ? 'is-invalid' : '' ?>"
                   id="adresse_compl_client" name="adresse_compl_client" value="<?= $_POST['adresse_compl_client'] ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessageAdresseCompl ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="cp_client">Code Postal</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageAdresseCP) && !empty($errorMessageAdresseCP)) ? 'is-invalid' : '' ?>"
                       id="cp_client" name="cp_client" value="<?= $_POST['cp_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageAdresseCP ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="ville_client">Complément</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageVille) && !empty($errorMessageVille)) ? 'is-invalid' : '' ?>"
                       id="ville_client" name="ville_client" value="<?= $_POST['ville_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageVille ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="email_client">Email</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                       id="email" name="email_client" value="<?= $_POST['email_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
            </div>

            <div class="form-group">
                <label for="mdp_client">Mot de passe</label>
                <input type="text"
                       class="form-control <?= (isset($errorMessageMDP) && !empty($errorMessageMDP)) ? 'is-invalid' : '' ?>"
                       id="mdp_client" name="mdp_client" value="<?= $_POST['mdp_client'] ?? '' ?>">
                <div class="invalid-feedback"><?= $errorMessageMDP ?? "" ?></div>
            </div>

            <input type="submit" value="S'inscrire" class="btn btn-outline-success">

        </form>

    </main>
<?php require 'inc/footer.php'; ?>