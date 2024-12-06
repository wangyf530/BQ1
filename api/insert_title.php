<?php

    include_once "db.php";
    // $TITLE = 
    // check if the img exists
    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],"../upload/" . $_FILES['img']['name']);
        // if success, store into $img
        // $data['text'] = $_POST['text'];
        // img info store in file
        $_POST['img'] = $_FILES['img']['name'];
    }

    $TITLE -> save($_POST);

    // headet("location:../admin.php?do=title");
    to("../admin.php?do=title");
    // $img = $_POST['img'];
    // $text = $_POST['text'];

?>