<?php

class AddDVD extends AddProduct {
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function addDVD() {
        $this->setDVD($this->size);
    }

}