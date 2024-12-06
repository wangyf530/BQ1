<?php
include_once "db.php";
if(!isset($_POST['id'])){
    exit();
}
//check if there's an uploaded pic
if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/".$_FILES['img']['name']);
    
    $row = $TITLE->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $TITLE->save($row);
}
// $id = $_GET['id'];
to("../admin.php?do=title");

?>