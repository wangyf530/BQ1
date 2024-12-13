<?php
    include_once "db.php";

    $buttom = $BUTTOM->find(1);

    $buttom['buttom']=$_POST['buttom'];
    $BUTTOM->save($buttom);

    to("../admin.php?do=buttom");
    
?>