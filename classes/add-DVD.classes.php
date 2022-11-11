<?php

class AddDVD extends AddProductContr {
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function addDVD() {
        if($this->emptyDVD() == false) {
            header("location: ../add-product.php?error=emptydvd");
            exit();
        }
        if($this->invalidData() == false) {
            header("loaction: ../add-product.php?error=data");
            exit();
        }
        

        $this->setDVD($this->size);
    }

    private function emptyDVD() {
        $result = null;
        if(empty($this->size)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}