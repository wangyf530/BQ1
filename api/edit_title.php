<?php
    include_once "db.php";

    dd($_POST);

    if(isset($_POST['id'])){
        foreach ($_POST['id'] as $idx => $id) {
            // 如果要刪除
            if(isset($_POST['del']) && in_array($id, $_POST['del'])){
                $TITLE->del($id);
            } else {
                //編輯
                $row = $TITLE->find($id);
                $row['text']=$_POST['text'][$idx];
                // 如果表單的sh有被選取，並且與要更改的id一致,那這一個id的sh就是1，其他情況就是0
                // ex. id為2的被勾選 那會從最前面的id開始看 直到foreach到id=2 就會把id=2的sh改成1
                // $row['sh']=(isset($_POST['sh']) && $_POST['sh']=$id)?1:0;
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                $TITLE->save($row);
            }
        }
    }

    to("../admin.php?do=title");
?>