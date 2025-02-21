<?php
require __DIR__ . '/actions/config.php';

    $login = $_POST['login'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    //valid
if (empty($login) || empty($pass) || empty($name) || empty($email)) {
    echo 'Заполните все поля';
    header('Location: /register.php');
    exit;
}
if (strlen($email) < 3){
    echo 'Слишком короткая почта';
    header('Location: /register.php');
    exit;
}
//Password
$salt = '123ddfnsk389axm';
$pass = md5($salt.$pass);

//INSERT
$query = "INSERT INTO users (login, username, email, password) VALUES ('$login', '$name', '$email', '$pass')";
$stmt = $pdo->prepare($query);
$stmt->execute();

header('Location: /index.php');
