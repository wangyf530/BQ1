<?php
    include_once "../api/db.php";
    $total = $TOTAL->find(1);
?>

<h3 class="cent">進站總人數管理</h3>
<hr>
<!-- 現在已經被include在admin.php 所以action要到api的時候直接api/update_view.php就好 不需要切換到上一層 -->
<form action="api/update_data.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td>進站總人數：</td>
            <td><input type="number" name="total" value="<?=$total['total'];?>"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="total">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>