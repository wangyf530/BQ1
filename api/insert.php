<?php

    include_once "db.php";

    $table = $_POST['table'];
    $db = strtoupper($table);
    
    // check if the img exists
    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../upload/" . $_FILES['img']['name']);
        // if success, store into $img
        // $data['text'] = $_POST['text'];
        // img info store in file
        $_POST['img'] = $_FILES['img']['name'];
    }
    unset($_POST['table']);

    $$db->save($_POST);
    to("../admin.php?do=$table");

?>