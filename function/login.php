<?php
require __DIR__ . '/actions/config.php';


$login = $_POST['login'];
$pass = $_POST['password'];

if (empty($login) || empty($pass)) {
    echo 'Заполните все поля';
    header('Location: /register.php');
    exit;
}
$salt = '123ddfnsk389axm';
$pass = md5($salt.$pass);


$query = "SELECT * FROM `users` WHERE login = '$login' AND password = '$pass'";
$stmt = $pdo->prepare($query);
$stmt->execute();

if($stmt->rowCount() === 0){
    echo "Такого пользователя нет";
}else{
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php');
}