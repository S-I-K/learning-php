<?php
    $title = 'Login';
    include('header.php');
    require_once('functions.php');

    /* FORM에서 넘어온 값에 login 변수가 있다면 */
    if(isset($_POST['login'])){
        /* input의 형식을 검사/ 넘어온 값 중에, 검사할 변수, 검사할 유형*/
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if($email == false){
            $status = '이메일 형식과 맞지 않음 다시 입력ㄱ';
        }
    }
?>

<form action="" method='post'>
    <p>
        <label for="email">Email : </label>
        <input type="text" id='email' name='email'>
    </p>
    <p>
        <label for="password">PASSWORD : </label>
        <input type="password" id='password' name='password'>
    </p>
    <p>
        <input type="submit" name='login' value='LOGIN'>
    </p>
</form>
<div class='error'>
    <?php
        if(isset($status)){
            echo $status;
        }
    ?>
</div>

<?php
    include('footer.php');
?>