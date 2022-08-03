<?php
    session_start();
    session_unset();// 세션 전부 비움
    session_destroy(); // 세션을 없애버림

    require_once('functions.php');
    redirect('login.php');
    die();
?>