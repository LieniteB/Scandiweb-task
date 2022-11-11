<?php
    include 'header.php'
?>
<main>
    <nav>
        <h1>Product Add</h1>
        
    </nav>
    <button form="product_form" type="submit" name="submit">Save</button>
        <button><a href="index.php"> Cancel</a></button>
    <form action="includes/add-product.inc.php" method="post" id="product_form">
        
        <br>
        <label for="sku">SKU</label>
        <input type="text" name="sku" id="sku">
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="price">Price($)</label>
        <input type="text" name="price" id="price">
        <br>
        
        <select name="type" id="productType" value="productType" onchange="selection()">
            <option value="type">Type Switcher</option>
            <option value="DVD">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select>

        <div class="atribute size" id="size">
            <p>Please, provide size</p>
            <label for="size">Size (MB)</label>
            <input type="text" name="size" id="size">
        </div>
        <div class="atribute hwl" id="hwl">
            <p>Please, provide dimensions</p>
            <label for="height">Height (CM)</label>
            <input type="text" name="height" id="height">
            <br>
            <label for="width">Width (CM)</label>
            <input type="text" name="width" id="width">
            <br>
            <label for="length">Length (CM)</label>
            <input type="text" name="length" id="length">
        </div>
        <div class="atribute weight" id="weight">
            <p>Please provide weight</p>
            <label for="weight">Weight (KG)</label>
            <input type="text" name="weight" id="weight">
        </div>
    </form>
    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please, submit required data</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "data") {
                echo "<p>Please, provide data of indicated type</p>";
            }
            else if ($_GET["error"] == "skutaken") {
                echo "<p>SKU is taken</p>";
            }
            else if ($_GET["error"] == "emptybook") {
                echo "<p>Please, submit required data</p>";
            }
            
            else if ($_GET["error"] == "emptyDVD") {
                echo "<p>Please, submit required data</p>";
            }
            
            else if ($_GET["error"] == "emptyfurniture") {
                echo "<p>Please, submit required data</p>";
            }
            
        }
        ?>
</main>

<?php
    include 'footer.php'
?>