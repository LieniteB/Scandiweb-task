<?php
    include 'header.php'
    ?>
<main>
    <nav>
        <h1>Product Add</h1>
        <div class="buttons">
            <button form="product_form" type="submit" name="submit" class="save">Save</button>
            <a href="index.php" ><button class="cancel">Cancel</button></a>
        </div>
    </nav>
    
    <form action="includes/add-product.inc.php" method="post" id="product_form">
        
        <br>
        <label for="sku">SKU</label>
        <input type="text" name="sku" id="sku" placeholder="SKU...">
        
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Name...">
        <br>
        <label for="price">Price($)</label>
        <input type="text" name="price" id="price" placeholder="Price($)...">
        <br>
        <label for="type">Type Switcher</label>
        <select name="type" id="productType" value="productType" onchange="selection()">
            <option value="type">Type Switcher</option>
            <option value="DVD">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select>
        <div class="atribute size" id="size-container">
            <p>Please, provide size</p>
            <label for="size">Size (MB)</label>
            <input type="text" name="size" id="size" placeholder="Size...">
        </div>
        <div class="atribute hwl" id="hwl">
            <p>Please, provide dimensions</p>
            <label for="height">Height (CM)</label>
            <input type="text" name="height" id="height" placeholder="Height...">
            <br>
            <label for="width">Width (CM)</label>
            <input type="text" name="width" id="width" placeholder="Width...">
            <br>
            <label for="length">Length (CM)</label>
            <input type="text" name="length" id="length" placeholder="Length...">
        </div>
        <div class="atribute weight" id="weight-container">
            <p>Please provide weight</p>
            <label for="weight">Weight (KG)</label>
            <input type="text" name="weight" id="weight" placeholder="Weight...">
        </div>
        <span id="error"></span>
    </form>
    
    <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "skutaken") {
                    echo "<p>SKU is taken</p>";
                }
            }
    ?>
</main>
<script async type="text/javascript" src="../js/validation.js"></script>
<?php
    include 'footer.php'
    ?>