<!-- 글조회, 검색, 삭제 -->
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
    /* 3. msg_board 테이블에서 글 조회 */
    /* SELECT * FROM 테이블이름 */
    $view_num = $_GET['number'];
    $sql = "SELECT * FROM msg_board WHERE number = $view_num";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view - abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
    <?php
        if($row = mysqli_fetch_array($result)){
    ?>

        <h3>글번호: <?= $row['number'] ?> / 글쓴이: <?= $row['name'] ?></h3>
        <div>
            <?= $row['message'] ?>
            <?= $row['message'] ?>
            <?= $row['message'] ?>
            <?= $row['message'] ?>
            <!-- 연관배열인거임 $row라는 배열에서 message라는 키 값을 조회한거임 -->
        </div>
    <?php
    }
    ?>
    <p><a href="index.php">main page gogo</a></p>
</body>
</html>