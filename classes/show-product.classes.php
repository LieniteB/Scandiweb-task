<?php

class ShowProduct extends Dbh {
    

    public function index() {
        $sql = 'SELECT * FROM products;';

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }

    }
    public function indexDVD($id) {
        $sql = "SELECT * FROM dvd WHERE product_id = '$id';";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }

    }
    public function indexFurniture($id) {
        $sql = "SELECT * FROM furniture WHERE product_id = '$id';";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }

    }
    public function indexBook($id) {
        $sql = "SELECT * FROM books WHERE product_id = '$id';";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }

    }
}