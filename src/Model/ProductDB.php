<?php


namespace App\Model;


class ProductDB
{
    protected $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product_list";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $products = new Products($item['id'], $item['name'], $item['type'], $item['spice'], $item['amount'], $item['date'], $item['description']);
            array_push($arr, $products);
        }
        return $arr;
    }

    public function create($product)
    {
        $sql = "INSERT INTO product_list (name, type, spice, amount, date, description) VALUES (:name, :type, :spice, :amount, :date, :description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $product->getName());
        $stmt->bindParam(':type', $product->getType());
        $stmt->bindParam(':spice', $product->getSpice());
        $stmt->bindParam(':amount', $product->getAmount());
        $stmt->bindParam(':date', $product->getDate());
        $stmt->bindParam(':description', $product->getDescription());
        return $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM `product_list` WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $product = new Products($row['id'], $row['name'], $row['type'], $row['spice'], $row['amount'], $row['date'], $row['description']);
        return $product;
    }

    public function update($product)
    {
        $sql = "UPDATE `product_list` SET `name`= :name,`type`= :type,`spice`= :spice,`amount`= :amount,`date`= :date,`description`= :description WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $product->getName());
        $stmt->bindParam(":type", $product->getType());
        $stmt->bindParam(":spice", $product->getSpice());
        $stmt->bindParam(":amount", $product->getAmount());
        $stmt->bindParam(":date", $product->getDate());
        $stmt->bindParam(":description", $product->getDescription());
        $stmt->bindParam(":id", $product->getId());
        $stmt->execute();
    }
    public function search($keyword)
    {
        $sql = "SELECT * FROM `product_list` WHERE name LIKE :keyword ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(':keyword', '%' . $keyword . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $row) {
            $product = new Products($row['id'], $row['name'], $row['type'], $row['spice'], $row['amount'], $row['date'], $row['description']);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `product_list` WHERE id = :id";
        $stmt =$this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}