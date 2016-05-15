<?php
require_once '../data/users.php';
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    foreach ($users as $log => $pass){
        $key = array_search($password, $users);
        if ($key==$email){
            header('Location: index.php');
        }
    }
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Art</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/log1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
<div class="container">
    <form class="form-horizontal" role="form" method="post">
        <h3>Вход в систему</h3>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button name="login" type="submit" class="btn btn-default">Войти</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>