<?php

    $section = $_GET['section'] ?? 'products';

    if ($section== 'add-product') {
        include "controller/add-product-contr.php";
    } else {
        include "controller/show-products-contr.php";
    }
