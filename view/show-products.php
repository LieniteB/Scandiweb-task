<?php
    include "$_SERVER[DOCUMENT_ROOT]/scandiweb_task/view/header.php";
    include "$_SERVER[DOCUMENT_ROOT]/scandiweb_task/classes/dbh.classes.php";
    include "$_SERVER[DOCUMENT_ROOT]/scandiweb_task/classes/show-product.classes.php";
    ?>

<main>
    <nav>
        <h1>Product List</h1>
        <div class="buttons">
            <a href="?section=add-product" ><button class="add">ADD</button></a>
            <button class="delete"form="delete" id="delete-product-btn" type='submit' name="remove">MASS DELETE</button>
        </div>
    </nav>
    <section class="all-products">
    <form action="../scandiweb_task/includes/delete.inc.php" method="POST" id="delete">
    



<?php
            $products = new ShowProduct();
    $result = $products->index();

    if ($result) {
        foreach ($result as $row) {
            $id = $row['product_id'];
            ?>
                    <div class="product">
                        <input type="checkbox" class="delete-checkbox" name ="delete[]" value = "<?=$id ?>">
                        <p><?= $row['product_sku']?></p>
                        <p><?= $row['product_name']?></p>
                        <p><?= $row['product_price']?> $</p>
                            <?php if ($row['product_type']==="DVD") {
                                $dvd = new ShowProduct();
                                $result = $dvd->indexDVD($id);
                                if (isset($result)) {
                                    foreach ($result as $row) {
                                        ?>
                                        <p>Size: <?=$row['product_size']?> MB</p>
                                        <?php
                                    }
                                }?>
                                <?php

                            } elseif ($row['product_type']==="furniture") {
                                $furniture = new ShowProduct();
                                $result = $furniture->indexFurniture($id);
                                if (isset($result)) {
                                    foreach ($result as $row) {
                                        ?>
                                        <p>Dimensions: <?=$row['product_height']?>x<?=$row['product_width']?>x<?=$row['product_length']?></p>
                                        
                                        <?php
                                    }
                                }?>
                                <?php

                            } elseif ($row['product_type']==="book") {
                                $book = new ShowProduct();
                                $result = $book->indexBook($id);
                                if (isset($result)) {
                                    foreach ($result as $row) {
                                        ?>
                                        <p>Weight: <?=$row['product_weight']?> KG</p>
                                        <?php
                                    }
                                }?>
                                <?php

                            }?>
                            
                    </div>
                
                <?php
        }
    }
    ?>
    </form>

    </section>
</main>
<?php
include "$_SERVER[DOCUMENT_ROOT]/scandiweb_task/view/footer.php"
    ?>