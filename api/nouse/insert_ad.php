<?php

    include_once "db.php";

    $AD -> save($_POST);

    to("../admin.php?do=ad");

?>