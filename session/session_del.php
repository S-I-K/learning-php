<?php
    /* session은 항상 최상단에서 시작하는게 좋다. */
    session_start(); // 세션 시작
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session del</title>
</head>
<body>
    <h1>session del</h1>
    <?php
        session_unset(); //세션의 모둔 변수를 제거.
        print_r($_SESSION);
    ?>
</body>
</html>