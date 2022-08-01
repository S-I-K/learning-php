<!-- 글조회, 검색, 삭제 -->
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
    <h2>글 목록</h2>
    <!-- list -->
    <ul>
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
        $sql = 'SELECT * FROM msg_board';
        $result = mysqli_query($conn, $sql);
        /* 빈 변수안에 넣어줄꺼임 */
        $list = '';
        /* foreach개념, $row라는 변수에 $result를 배열형식으로 바꾼 후 넣어줌 */
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li>{$row['number']}번 : <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
        }
        echo $list;
    ?>
    </ul>
    <!-- //list -->
    <hr/>
    <p><a href="write.php">글 쓰기</a></p>
    <hr/>
    <h2>글 검색</h2>
    <form action="search.php" method="post">
        <h3>검색할 키워드를 입력</h3>
        <p>
            <label for="search">키워드 :</label>
            <input type="text" name="skey" id="search">
            <!-- name 값으로 db 조회 하는거임 -->
        </p>
        <input type="submit" value="검색">
    </form>
    <form action="delete.php" method="post">
        <h3>삭제할 메세지 번호를 입력</h3>
        <p>
            <label for="msgdel">번호 :</label>
            <input type="text" name="delnum" id="msgdel">
        </p>
        <input type="submit" value="삭제">
    </form>
</body>
</html>