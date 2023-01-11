<?php
    require_once "connect.php";

    $arr_key_1 = $_POST['arr_key_1'];
    $arr_key_2 = $_POST['arr_key_2'];

    $element_1 = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `elements` WHERE arr_key = '$arr_key_1'"));
    $element_2 = mysqli_fetch_row(mysqli_query($connect, "SELECT * FROM `elements` WHERE arr_key = '$arr_key_2'"));
    $tmp = $element_2[2];

    mysqli_query($connect, "UPDATE `elements` SET `value`='$element_1[2]' WHERE arr_key = '$arr_key_2'");
    mysqli_query($connect, "UPDATE `elements` SET `value`='$tmp' WHERE arr_key = '$arr_key_1'");
?>
