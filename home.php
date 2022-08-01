<?php
    $title = '함수';
    require_once('component/funcs.php');
    include_once('component/header.php');
    /*require와 include의 차이점
        require = 에러발생시 전부 실행하지 않음,
        include = 에러발생한것만 실행하지 않음
        _once를 붙여서 사용하면 딱 한번만 실행함
    */
?>
<!-- /header -->

<h2>합계 함수</h2>
<?php
    $result = sum(20, 20);
    echo $result;
?>
<hr/>

<h2>배열출력 함수</h2>
<?php
    $fruits = [
        'apple',
        'mango',
        'banana',
        'orange'
    ];
    output($fruits);
?>
<hr/>

<h2>정적 변수</h2>
<?php
    increment();
    increment();
    increment();
?>
<hr/>

<?php
    include_once('component/footer.php');
?>
<!-- /footer -->