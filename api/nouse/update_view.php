<?php
    include_once "db.php";

    $total = $TOTAL->find(1);

    $total['total']=$_POST['total'];
    $TOTAL->save($total);

    to("../admin.php?do=total");
    
?>