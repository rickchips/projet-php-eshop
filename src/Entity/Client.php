<?php
namespace src\Entity;

class Client
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $prenom_client;
    /**
     * @var string
     */
    private $nom_client;
    /**
     * @var string
     */
    private $adresse_client;
    /**
     * @var string|null
     */
    private $adresse_compl_client;
    /**
     * @var string
     */
    private $cp_client;
    /**
     * @var string
     */
    private $ville_client;
    /**
     * @var string
     */
    private $email_client;
    /**
     * @var string
     */
    private $mdp_client;

    /**
     * Client constructor.
     * @param string $prenom_client
     * @param string $nom_client
     * @param string $adresse_client
     * @param string|null $adresse_compl_client
     * @param string $cp_client
     * @param string $ville_client
     * @param string $email_client
     * @param string $mdp_client
     */
    public function __construct(string $prenom_client, string $nom_client, string $adresse_client, ?string $adresse_compl_client, string $cp_client, string $ville_client, string $email_client, string $mdp_client)
    {
        $this->prenom_client = $prenom_client;
        $this->nom_client = $nom_client;
        $this->adresse_client = $adresse_client;
        $this->adresse_compl_client = $adresse_compl_client;
        $this->cp_client = $cp_client;
        $this->ville_client = $ville_client;
        $this->email_client = $email_client;
        $this->setMdpClient($mdp_client);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrenomClient()
    {
        return $this->prenom_client;
    }

    /**
     * @param mixed $prenom_client
     */
    public function setPrenomClient($prenom_client)
    {
        $this->prenom_client = $prenom_client;
    }

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nom_client;
    }

    /**
     * @param mixed $nom_client
     */
    public function setNomClient($nom_client)
    {
        $this->nom_client = $nom_client;
    }

    /**
     * @return mixed
     */
    public function getAdresseClient()
    {
        return $this->adresse_client;
    }

    /**
     * @param mixed $adresse_client
     */
    public function setAdresseClient($adresse_client)
    {
        $this->adresse_client = $adresse_client;
    }

    /**
     * @return mixed
     */
    public function getAdresseComplClient()
    {
        return $this->adresse_compl_client;
    }

    /**
     * @param mixed $adresse_compl_client
     */
    public function setAdresseComplClient($adresse_compl_client)
    {
        $this->adresse_compl_client = $adresse_compl_client;
    }

    /**
     * @return mixed
     */
    public function getCpClient()
    {
        return $this->cp_client;
    }

    /**
     * @param mixed $cp_client
     */
    public function setCpClient($cp_client)
    {
        $this->cp_client = $cp_client;
    }

    /**
     * @return mixed
     */
    public function getVilleClient()
    {
        return $this->ville_client;
    }

    /**
     * @param mixed $ville_client
     */
    public function setVilleClient($ville_client)
    {
        $this->ville_client = $ville_client;
    }

    /**
     * @return mixed
     */
    public function getEmailClient()
    {
        return $this->email_client;
    }

    /**
     * @param mixed $email_client
     */
    public function setEmailClient($email_client)
    {
        $this->email_client = $email_client;
    }

    /**
     * @return mixed
     */
    public function getMdpClient()
    {
        return $this->mdp_client;
    }

    /**
     * Ajoute et hash le mot de passe
     * @param string $password
     */
    public function setMdpClient(string $mdp_client): void
    {
        // Hashage
        $hash = password_hash($mdp_client, PASSWORD_BCRYPT);
        // Stockage
        $this->mdp_client = $hash;
    }

    /**
     * Récupère le nom d'utilisateur, l'email et le mot de passe
     * Prépare la requête SQL pour le "INSERT INTO"
     * @return string
     */

    public function getStrParamsSQL(): string
    {
        // On crée un tableau avec les 3 propriétés
        $tab = [
            htmlentities($this->prenom_client),
            htmlentities($this->nom_client),
            htmlentities($this->adresse_client),
            htmlentities($this->adresse_compl_client),
            htmlentities($this->cp_client),
            htmlentities($this->ville_client),
            htmlentities($this->email_client),
            htmlentities($this->mdp_client),
        ];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'";
    }











}