<?php
require 'connectdb.php';
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass = md5($pass."djk4t1i43o");
$result_for_auth = $connection->query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");
$user = $result_for_auth->fetch_assoc();
if(count($user)==0) {
    echo "Такой пользователь не найден";
    exit();
}
setcookie('user' , $user['name'], time()+3600*24, "/");
$connection->close();
header('Location: /auth_sites/index_frst.php');