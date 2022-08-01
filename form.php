<!-- header -->
<?php
    $title = 'login';
    include('component/header.php');
    require('component/funcs.php');
?>

<form action='request.php' method='get'>
    <div>
        <label for="userName">name</label>
        <input type="text" name='username' id='userName'>
    </div>
    <div>
        <label for="userEmail">Email</label>
        <input type="email" name='useremail' id='userEmail'>
    </div>
    <div>
        <input type="submit" value='login'>
    </div>
</form>


<!-- footer -->
<?php
    include('component/footer.php');
?>