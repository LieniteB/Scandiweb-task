<?php

class AddBook extends AddProductContr {
    private $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function addBook() {
        if($this->emptyDVD() == false) {
            header("location: ../add-product.php?error=emptybook");
            exit();
        }
        if($this->invalidData() == false) {
            header("loaction: ../add-product.php?error=data");
            exit();
        }
        

        $this->setBook($this->weight);
    }

    private function emptyDVD() {
        $result = null;
        if(empty($this->weight)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}