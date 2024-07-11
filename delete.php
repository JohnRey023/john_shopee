<?php

include 'conn.php';

if(isset($_GET['customer_id'])){

    $customer_id = ($_GET['customer_id']);

    $delete = "DELETE FROM customer WHERE customer_id = '$customer_id'";
    $deletesql = $conn->query($delete);

    if($deletesql){
        
        header("location: customers.php");
    }else{
        echo "Failed to delete";
    }

}


?>