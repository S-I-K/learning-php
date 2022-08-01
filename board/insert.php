<!-- 글 입력 페이지 -->
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
    /* 3. form에서 받아온 정보를 변수에 저장 */
    $user_name = $_POST['name'];
    $user_msg = $_POST['message'];
    /* 4. INSERT문을 변수에 저장 */
    $sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";
    /* 5. DB QUERY 날리기 */
    $result = mysqli_query($conn, $sql);
    /* 6. DB QUERY가 잘 들어갔는지 확인하는 메세지 출력 */
    if($result === false){
        echo '저장 못함ㅋ';
        error_log(mysqli_error($conn)); //에러 로그 기록
    }else{
        echo '저장한듯';
    }
    
    /* DB 끄기 */
    mysqli_close($conn);
    
    print '<hr/><a href="index.php">main page</a>';
?>