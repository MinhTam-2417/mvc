<?php
class ProductModel extends BaseModel
{
    protected $table = "products";
    public function getAll()
    {
        $sql = "SELECT `products` .*, `category`.`category_name` FROM `products` JOIN `category` ON `products`.`category_id` = `category`.`category_id`";

        $smtm = $this->pdo->prepare($sql);

        $smtm->execute();

        return $smtm->fetchAll();
    }

    public function DeleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE `products`.`product_id` = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

    public function Insert($name, $price, $img, $cate_id)
    {
        $sql = "INSERT INTO `products`(`product_name`, `product_price`, `product_img`, `category_id`)
                VALUES (:name, :price, :img, :cate_id)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':cate_id', $cate_id);

        $stmt->execute();
    }

    public function getProductByID($id){

        $sql = "SELECT * FROM `products` WHERE `products`.`product_id` = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function Update($product_id, $name, $price, $img, $cate_id)
    {
        $sql = "UPDATE `products` 
                SET `product_name` = :name, `product_price` = :price, `product_img` = :img, `Category_id` = :cate_id 
                WHERE `products`.`product_id` = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':cate_id', $cate_id);
        $stmt->bindParam(':id', $product_id);
        
        $stmt->execute();
    }
}