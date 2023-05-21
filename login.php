<?php
  session_start();
  require "connection.php";
    
    $sql = "SELECT id, login, password FROM users Where login = :login";
    $database->
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="index.php">Главная</a></p>
    <form action="" method="POST">
        <input type="text" name="login" value="" required>
        <input type="password" name="password" value="" placeholder="пароль" required>
        <button>Войти</button>
    </form>
    <p>пароль неверный</p>
</body>
</html>