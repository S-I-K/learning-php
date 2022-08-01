<?php
    error_reporting(1);
    ini_set("display_error", 1);

    $connect = mysqli_connect("localhost", "user");

    if(mysqli_connect_error()){
        echo 'mysql 접속중 오류';
        echo mysqli_connect_error();
    }

?>