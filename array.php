<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>연관배열이 뭔데</title>
</head>
<body>
    <h1>연관배열은 key와 value로 구성되어있고 foreach로 열관</h1>
    <?php
        // $user = [];
        // $user['name'] = 'daesik';
        // $user['age'] = 24;
        // $user['job'] = 'develop';


        $user = array('name'=>'daesik', 'age'=>24, 'job'=>'develop');
        foreach($user as $key => $value) {
            echo $key."는".$value."이다<br/>";
        }
    ?>
</body>
</html>