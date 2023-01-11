<?php
    require_once "connect.php";

    mysqli_query($connect, "DELETE FROM `elements`");

    $size = $_POST['size'];
    for ($i = 0 ; $i != $size ; $i++) {
        $element = rand (0,1000);
        mysqli_query($connect, "INSERT INTO `elements` (`id`, `arr_key`, `value`) VALUES (NULL, '$i', '$element')");
    }
