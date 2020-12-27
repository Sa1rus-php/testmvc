<?php
$connection = mysqli_connect("loca_mysql", "root", "dbggj_bggei-bgch", "auth" );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- Лого -->
    <a class="navbar-brand" href="#">Rekhlitskiy</a>

    <!-- Ссылки -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/auth_sites/urok1.html">Lesson 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth_sites/urok2.html">Lesson 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/auth_sites/urok3.html">Lesson 3</a>
        </li>
        <!-- Меню -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Меню
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/auth_sites/urok1.html">Lesson 1</a>
                <a class="dropdown-item" href="/auth_sites/urok2.html">Lesson 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/auth_sites/urok3.html">Lesson 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/auth_sites/sites.html">Site</a>
            </div>
        </li>
        <li class="nav-item navbar-right">
            <a href="/auth_sites/exit.php" class="nav-link">Выйти</a>
        </li>
    </ul>
</nav>
<h2>Все записи:</h2>
<?php
if($connection == false){
    echo "Error!";
    echo mysqli_connect_error();
    exit();
}
$query = mysqli_query($connection, "SELECT * FROM posts");
while($article =mysqli_fetch_assoc($query)){
    echo '<div class="art">';
    echo '( '.$article['id'].' ) <a href=page.php?id='.$article['id'].'>'.$article['Title'].'</a><br>';
    echo $article['Text'].'<br>';
    echo '</div>';



}
?>
</body>
</html>