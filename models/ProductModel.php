<?php
class ProductModel extends BaseModel
{
    protected $table = "products";
    public function getAll(){
        $sql = "SELECT * FROM " . $this->table;

        $smtm = $this->pdo->prepare($sql);

        $smtm->execute();

        return $smtm->fetchAll();
    }
}