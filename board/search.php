<!-- 글 키워드 검색 기능 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>검색 결과</h2>
    <?php
        /* 1. DB 연결 */
        /* $변수명 = mysqli_connect("경로", "db user", "db pwd", "db name") */
        $hostname = 'localhost';
        $userID = 'root';
        $userPW = '111111';
        $DBname = 'abc_corp';

        $conn = mysqli_connect($hostname, $userID, $userPW, $DBname);
        /* 2. DB 연결, 에러상태 확인 */
        if(!$conn){
            echo "error, DB에 연결 못한듯ㅋ";
            echo mysqli_connect_error();
        }else{
            echo 'DB에 접속한듯';
        }
    ?>

    <!-- 검색기능 -->
    <?php
        $user_skey = $_POST['skey'];
        $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($conn, $sql);
        $list = '';

        while($row = mysqli_fetch_array($result)){
            $list = $list."<li>{$row['number']}번 : <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
        }
        echo $list;
        mysqli_close($conn);
    ?>
    <p><a href="index.php">main page gogo</a></p>
</body>
</html>