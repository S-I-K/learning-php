<?php
    /* session은 항상 최상단에서 시작하는게 좋다. */
    session_start(); // 세션 시작
    $_SESSION['city'] = 'seoul'; //값 등록, city에 'seoul' 등록
    $_SESSION['gu'] = 'jongro';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session start</title>
</head>
<body>
    <h1>session session</h1>
    <?php
        echo 'session load<br/>';
        if(!isset($_SESSION['gu'])){
            echo '세션이 등록되지 않았습니다.';
        }else{
            echo '세션의 값은 '.$_SESSION['gu'].'<br/>';
            print_r($_SESSION); //모든 세션을 연관배열 형태로 출력
        }
    ?>
</body>
</html>