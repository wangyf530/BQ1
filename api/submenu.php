<?php
    include_once "db.php";
//有資料要編輯 其他就是新增
    if(isset($_POST['id'])){
        foreach ($_POST['id'] as $idx => $id) {
            // if del
            if(isset($_POST['del']) && in_array($id, $_POST['del'])){
                $MENU->del($id);
            } else {
                $row = $MENU->find($id);
                $row['text']=$_POST['text'][$idx];
                $row['href']=$_POST['href'][$idx];
                $MENU->save($row);
            }
        }
    }

    if(isset($_POST['text2'])){
        foreach ($_POST['text2'] as $idx => $text) {
            if($text!=''){
                $row=[];
                $row['text'] = $text;
                $row['href'] = $_POST['href2'][$idx];
                $row['main_id'] = $_POST['main_id'];
                $MENU->save($row);

            }
        }
    }

    to("../admin.php?do=menu");
?>