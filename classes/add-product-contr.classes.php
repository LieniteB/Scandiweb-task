<?php

class AddProductContr extends AddProduct{

    private $sku;
    private $name;
    private $price;
    private $size;
    private $type;
    private $height;
    private $width;
    private $length;
    private $weight;

    public function __construct($sku, $name, $price, $type)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    public function addProduct() {
        // if($this->emptyInput() == false) {
        //     header("location: ../add-product.php?error=emptyinput");
        //     exit();
        // }
        if($this->invalidData() == false) {
            header("loaction: ../add-product.php?error=data");
            exit();
        }
        if($this->SKUTakenCheck() == false) {
            header("location: ../add-product.php?error=skutaken");
            exit();
        }

        $this->setProduct($this->sku, $this->name, $this->price, $this->type);
    }

    //error handelers

    protected function emptyInput() {
        $result = null;
        if(empty($this->sku) || empty($this->name) || empty($this->price)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    protected function invalidData() {
        $result = null;
        if(!preg_match("/^[0-9]*$/", $this->price) || !preg_match("/^[0-9]*$/", $this->size) || !preg_match("/^[0-9]*$/", $this->height) || !preg_match("/^[0-9]*$/", $this->width) || !preg_match("/^[0-9]*$/", $this->length) || !preg_match("/^[0-9]*$/", $this->weight)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function SKUTakenCheck() {
        $result = null;
        if(!$this->checkSKU($this->sku)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

}