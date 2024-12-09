<?php
    include_once "db.php";

    $table = $_POST['table'];
    $db = strtoupper($table);

    // dd($_POST);

    if(isset($_POST['id'])){
        foreach ($_POST['id'] as $idx => $id) {
            // 如果要刪除
            if(isset($_POST['del']) && in_array($id, $_POST['del'])){
                // 可變變量
                // $$db = $TABLE
                $$db->del($id);
            } else {
                //編輯
                $row = $$db->find($id);
                switch($table){
                    case "title":
                        $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                        $row['text']=$_POST['text'][$idx];
                        break;
                    case "admin":
                        $row['acc']=$_POST['acc'][$idx];
                        $row['pw']=$_POST['pw'][$idx];
                        break;
                    case "menu":
                        $row['text']=$_POST['text'][$idx];
                        $row['href']=$_POST['href'][$idx];
                        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                        break;
                    default:
                        $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                        // 如果有文字
                        if(isset($_POST['text'])){
                            $row['text']=$_POST['text'][$idx];
                        }
                    }
            
                $$db->save($row);
            }
        }
    }

    to("../admin.php?do=$table");
?>