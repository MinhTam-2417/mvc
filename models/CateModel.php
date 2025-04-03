<?php
class CateModel extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM `category`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}