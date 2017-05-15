<?php

class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var ProductType
     */
    private $type;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $prixMin;

    /**
     * @var integer
     */
    private $prixMax;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ProductType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param ProductType $type
     * @return Product
     */
    public function setType(ProductType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Product
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrixMin()
    {
        return $this->prixMin;
    }

    /**
     * @param int $prixMin
     * @return Product
     */
    public function setPrixMin($prixMin)
    {
        $this->prixMin = $prixMin;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrixMax()
    {
        return $this->prixMax;
    }

    /**
     * @param int $prixMax
     * @return Product
     */
    public function setPrixMax($prixMax)
    {
        $this->prixMax = $prixMax;
        return $this;
    }


}