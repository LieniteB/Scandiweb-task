<?php

class AddFurniture extends AddProductContr {
    private $height;
    private $width; 
    private $length;
    

    public function __construct($height, $width, $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        
    }

    public function addFurniture() {
        if($this->emptyFurniture() == false) {
            header("location: ../add-product.php?error=emptyfurniture");
            exit();
        }
        if($this->invalidData() == false) {
            header("loaction: ../add-product.php?error=data");
            exit();
        }
        

        $this->setFurniture($this->height, $this->width, $this->length);
    }

    private function emptyFurniture() {
        $result = null;
        if(empty($this->height) || empty($this->width) || empty($this->length)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}