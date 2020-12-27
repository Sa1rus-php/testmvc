<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Регистрация</h2>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Регистрация</button>
            </form>
        </div>
            <div class="col">
        <h2>Авторизация</h2>
        <form action="auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="password" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизация</button>
        </form>
             </div>
    </div>
</div>
</body>
</html>