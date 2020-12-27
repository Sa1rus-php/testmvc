<?php
$connection = mysqli_connect("loca_mysql", "root", "dbggj_bggei-bgch", "auth" );

if($connection == false){
    echo "Error!";
    echo mysqli_connect_errno();
    exit();
}
$page = $_GET['id'];
echo $page;
$query = mysqli_query($connection, "SELECT * FROM posts WHERE id='$page' ");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Документ без названия</title>
</head>
<style>
    .art{border: 1px solid #787777;
        width: 800px;

    }
</style>
<body>
<?php
$article = mysqli_fetch_assoc($query);
echo '<div class="art">';
echo '( '.$article['id'].' ) <a href=page.php?id='.$article['id'].'>'.$article['Title'].'</a><br>';
echo $article['Text'].'<br>';
echo '</div>';
?>
</body>
</html>
