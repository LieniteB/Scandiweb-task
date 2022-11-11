<?php

if(isset($_POST["remove"])) {

    include "../classes/dbh.classes.php";
    include "../classes/delete.classes.php";

    if(isset($_POST["delete"])){

        foreach($_POST["delete"] as $deleteId) {
            $checked = new Delete();
            $checked->deleteChecked($deleteId);
        }

    }

    header("location: ../index.php?error=none");
}