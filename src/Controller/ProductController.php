<?php

namespace App\Controller;

use App\Model\DBConnect;
use App\Model\ProductDB;
use App\Model\Products;

class ProductController
{
    protected $productDB;

    public function __construct()
    {
        $connection = new DBConnect ("mysql:host=localhost;dbname=products", "root", "Chien@123");
        $this->productDB = new ProductDB ($connection->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include 'src/View/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/add.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $spice = $_REQUEST['spice'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $product = new Products ($id, $name, $type, $spice, $amount, $date, $description);
            $this->productDB->create($product);
            header('location:index.php?page=list-product');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include "src/View/edit.php";
        } else {
            $products = new Products($_POST['id'], $_POST['name'], $_POST['type'], $_POST['spice'], $_POST['amount'], $_POST['date'], $_POST['description']);
            $this->productDB->update($products);
            header('location:index.php?page=list-product');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/search.php';
        } else {
            $search = $_POST['search'];
            $products = $this->productDB->search($search);
            include 'src/View/search.php';
        }
    }

    public function delete($id)
    {
        $this->productDB->delete($id);
        header('location:index.php?page=list-product');
    }
}