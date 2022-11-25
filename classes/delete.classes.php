<?php

class Delete extends Dbh
{
    public function deleteChecked($deleteId)
    {
        $deleteUser = "DELETE from products WHERE product_id='$deleteId';";

        $stmt = $this->connect()->prepare($deleteUser);
        $stmt->execute();
    }
}
