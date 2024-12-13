<?php
    include_once "db.php";
    $table = $_POST['table'];
    $db = strtoupper($table);
    $row = $$db->find(1);

    $row[$table]=$_POST[$table];
    $$db->save($row);

    to("../admin.php?do=$table");
    
?>