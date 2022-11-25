<?php

class AddProduct extends Dbh
{
    protected function setProduct($sku, $name, $price, $type)
    {
        $stmt = $this->connect()->prepare('INSERT INTO products (product_sku, product_name, product_price, product_type) VALUES (?, ?, ?, ?);');

        if (!$stmt->execute(array($sku, $name, $price, $type))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setDVD($size)
    {
        $stmt = $this->connect()->prepare("INSERT INTO dvd (product_id, product_size) VALUES ((SELECT max(product_id) FROM products), ?);");

        if (!$stmt->execute(array($size))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }


    protected function setBook($weight)
    {
        $stmt = $this->connect()->prepare("INSERT INTO books (product_id, product_weight) VALUES ((SELECT max(product_id) FROM products), ?);");

        if (!$stmt->execute(array($weight))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setFurniture($height, $width, $length)
    {
        $stmt = $this->connect()->prepare("INSERT INTO furniture (product_id, product_height, product_width, product_length) VALUES ((SELECT max(product_id) FROM products), ?, ?, ?);");

        if (!$stmt->execute(array($height, $width, $length))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkSKU($sku)
    {
        $stmt = $this->connect()->prepare('SELECT product_sku FROM products WHERE product_sku = ?');

        if (!$stmt->execute(array($sku))) {
            $stmt = null;
            header("location: ../add-product.php?error=stmtfailed");
            exit();
        }

        $resultCheck =null;

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}
