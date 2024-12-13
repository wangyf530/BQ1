<?php
    include_once "db.php";

    // dd($_POST);

    if(isset($_POST['id'])){
        foreach ($_POST['id'] as $idx => $id) {
            // 如果要刪除
            if(isset($_POST['del']) && in_array($id, $_POST['del'])){
                $AD->del($id);
            } else {
                //編輯
                $row = $AD->find($id);
                $row['text']=$_POST['text'][$idx];
                // ad可以顯示複數
                $row['sh']=(isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $AD->save($row);
            }
        }
    }

    to("../admin.php?do=ad");
?>