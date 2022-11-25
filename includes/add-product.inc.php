<?php

if (isset($_POST["submit"])) {
    // Grabing the data
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $size = $_POST["size"];
    $height = $_POST["height"];
    $width = $_POST["width"];
    $length = $_POST["length"];
    $weight = $_POST["weight"];

    // Instantiate AddProductContr class
    include "../classes/dbh.classes.php";
    include "../classes/add-product.classes.php";
    include "../classes/add-product-contr.classes.php";
    include "../classes/add-DVD.classes.php";
    include "../classes/add-furniture.classes.php";
    include "../classes/add-book.classes.php";

    $add_product = new AddProductContr($sku, $name, $price, $type);

    //Running error handlers and adding product
    $add_product->addProduct();

    // Adding type switcher values depending on the type clicked
    if ($type === "DVD") {
        $add_DVD = new AddDVD($size);
        $add_DVD->addDVD();
    } elseif ($type === "furniture") {
        $add_furniture = new AddFurniture($height, $width, $length);
        $add_furniture->addFurniture();
    } elseif ($type === "book") {
        $add_book = new AddBook($weight);
        $add_book->addBook();
    };


    // Going back to the product page
    header("location: ../index.php?error=none");
}
