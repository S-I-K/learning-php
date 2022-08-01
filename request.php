<!-- header -->
<?php
    $title = 'request';
    include('component/header.php');
    require('component/funcs.php');
?>

<?php
    $name = $_GET["username"];
    $email = $_GET["useremail"];

?>

<!-- footer -->
<?php
    include('component/footer.php');
?>