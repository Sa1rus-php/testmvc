<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            <a class="nav-link" href="urok1.html">Lesson 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="urok2.html">Lesson 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="urok3.html">Lesson 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts/posts.php">Посты</a>
        </li>
        <!-- Меню -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Меню
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="urok1.html">Lesson 1</a>
                <a class="dropdown-item" href="urok2.html">Lesson 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="urok3.html">Lesson 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="sites.html">Site</a>
            </div>
        </li>
        <li class="nav-item navbar-right">
            <a href="exit.php" class="nav-link">Выйти</a>
        </li>
    </ul>
</nav>
</body>
</html>