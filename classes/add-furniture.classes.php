<?php

class AddFurniture extends AddProduct {
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
        $this->setFurniture($this->height, $this->width, $this->length);
    }

}