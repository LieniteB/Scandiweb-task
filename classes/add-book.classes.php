<?php

class AddBook extends AddProduct {
    private $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function addBook() {
        $this->setBook($this->weight);
    }
}