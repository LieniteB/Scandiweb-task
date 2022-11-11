<?php

if(isset($_POST["submit"])) {

    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $size = $_POST["size"];
    $height = $_POST["height"];
    $width = $_POST["width"];
    $length = $_POST["length"];
    $weight = $_POST["weight"];

    include "../classes/dbh.classes.php";
    include "../classes/add-product.classes.php";
    include "../classes/add-product-contr.classes.php";
    include "../classes/add-DVD.classes.php";
    include "../classes/add-furniture.classes.php";
    include "../classes/add-book.classes.php";

    $add_product = new AddProductContr($sku, $name, $price, $type);
    $add_product->addProduct();

    if($type === "DVD"){
        $add_DVD = new AddDVD($size);
        $add_DVD->addDVD();
    } else if ($type === "furniture") {
        $add_furniture = new AddFurniture($height, $width, $length);
        $add_furniture->addFurniture();
    }else if ($type === "book") {
        $add_book = new AddBook($weight);
        $add_book->addBook();
    };

    

    header("location: ../index.php?error=none");
}