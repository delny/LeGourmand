<?php

class ProductTypeManager extends DatabaseManager
{
    /**
     * Connection SQL
     * @var PDO
     */
    private $bdd;

    /**
     * ProductTypeManager constructor.
     */
    public function __construct()
    {
        $this->bdd = parent::getBDD();
    }

    /**
     * @param $id
     * @return null|ProductType
     */
    public function find($id)
    {
        $sql = $this->bdd->prepare('SELECT * FROM product_type WHERE prdcttype_id = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if ($result = $sql->fetch())
        {
            return $this->buildObject($result);
        }
        else
        {
            return NULL;
        }
    }

    /**
     * @param array $row
     * @return ProductType
     */
    public function buildObject(Array $row)
    {
        $productType = new ProductType();
        $productType->setId($row['prdcttype_id'])
            ->setLibelle($row['prdcttype_libelle']);

        return $productType;
    }
}