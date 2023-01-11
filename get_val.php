<?php
    require_once "connect.php";

    $arr_key = $_POST['arr_key'];
    $element = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `elements` WHERE `arr_key` = '$arr_key'"));

    echo $element[2];
?>
