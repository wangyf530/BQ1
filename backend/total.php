<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <?php include_once "logout.php";?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">進站總人數管理</p>
        <form action="api/update_data.php" method="post" enctype="multipart/form-data">
            <table style="margin:auto;">
                <tr class="yel">
                    <td>進站總人數：</td>
                    <?php
                        $row=$TOTAL->find(1);
                    ?>
                    <td style="background-color:unset"><input type="number" name="total" value="<?=$row['total'];?>"></td>
                </tr>
            </table>
            <div class="cent">
                <input type="hidden" name="table" value="total">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </div>
        </form>
    </div>
</div>