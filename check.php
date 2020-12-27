<?php
require 'connectdb.php';
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 4 || mb_strlen($login) > 25) {
    echo "Недопустимая длина логина (от 4 до 25 символов) ";
    exit();
}else if(mb_strlen($name) < 2 || mb_strlen($login) > 100) {
    echo "Недопустимая длина имени (от 2 до 100 символов) ";
    exit();
} else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 32) {
    echo "Недопустимая длина пароля (от 6 до 32 символов) ";
    exit();
}
$pass = md5($pass."djk4t1i43o");
$query = "INSERT INTO users (login , name , pass) VALUES ('$login', '$name', '$pass')";
$result = mysqli_query($connection, $query);

$connection->close();
header('Location: /');