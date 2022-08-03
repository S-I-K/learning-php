<?php
    session_start();
    require_once('config.php');
    require_once('functions.php');
    echo $_SESSION['email'].'님이 접속하셨습니다.';
    ensure_user_authenticated();
    include('header.php');
?>

<a href="logout.php">LOGOUT</a>

<?php
    include('footer.php');
?>