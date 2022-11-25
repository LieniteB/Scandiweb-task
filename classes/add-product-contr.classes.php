<?php

class AddProductContr extends AddProduct
{
    private $sku;
    private $name;
    private $price;
    private $type;

    public function __construct($sku, $name, $price, $type)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    public function addProduct()
    {
        if ($this->SKUTakenCheck() == false) {
            header("location: ../add-product.php?error=skutaken");
            exit();
        }

        $this->setProduct($this->sku, $this->name, $this->price, $this->type);
    }

    //error handelers

    private function SKUTakenCheck()
    {
        $result = null;
        if (!$this->checkSKU($this->sku)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
