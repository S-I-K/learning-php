<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user list</title>
</head>
<body>
    <h1>회원리스트</h1>
    <ul>
        <?php
            for($i=1; $i<=20; $i++){
        ?>
            <li>김대식 <?= $i ?></li>
            <li>노효정 <?= $i ?></li>
        <?php
            }
        ?>
    </ul>
</body>
</html>