<?php
    session_start(); //기본값이 off여서 start로 세션시작해줘야함
    $_SESSION['greeting'] = 'hi';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session login event</title>
</head>
<body>
    <h1>로그인 기능 만들어볼꺼임</h1>

    <?php
        $isLogin = $_SESSION['isLogin'];

        if(!$isLogin){
            echo '로그인을 먼저 해야지<br/>';
            echo '<a href="login.php">로그인</a>';
        }
    ?>
</body>
</html>