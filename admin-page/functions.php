<?php
    function output($val){
        echo "<pre>";
        print_r($val);
        echo "</pre>";
    }

    /* 관리자 정보 확인 함수 */
    function authenticate_user($email, $password){
        if($email == USER_NAME && $password == PASSWORD){
            return true;
        }
    }

    /* 페이지 이동 함수 */
    function redirect($url){
        header("Location: $url"); //큰 따옴표를 써야지 변수와 같이 쓸 수 있음
    }

    /* 관리자 정보 세션에 있는지 확인 함수 */
    function is_user_authenticated(){
        return isset($_SESSION['email']);
    }

    /* 관리자가 아니면 로그인 페이지로 강퇴시키는 함수 */
    function ensure_user_authenticated(){
        if(!is_user_authenticated()){
            redirect('login.php');
            die();
        }
    }
?>