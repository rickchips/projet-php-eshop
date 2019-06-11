<?php
namespace src\Entity;



class Article
{

    private $id;
    private $nom_article;
    private $description_article;
    private $prix_article;
    private $image_name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom_article;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom_article)
    {
        $this->nom_article = $nom_article;
    }

    /**
     * @return mixed
     */
    public function getDescription_Article()
    {
        return $this->description_article;
    }

    /**
     * @param mixed $description
     */
    public function setDescription_Article($description_article)
    {
        $this->description_article = $description_article;
    }

    /**
     * @return mixed
     */
    public function getPrix_Article()
    {
        return $this->prix_article;
    }

    /**
     * @param mixed $prix_article
     */
    public function setPrix_Article($prix_article)
    {
        $this->prix_article = $prix_article;
    }


    /**
     * @return mixed
     */
    public function getImage_Name()
    {
        return $this->image_name ?? $this->image_name ?? '';
    }

    /**
     * @param mixed $imageName
     */
    public function setImage_Name($image_name)
    {
        $this->image_name = $image_name;
    }



}
