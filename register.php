<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
<?php require_once "blocks/header.php"; ?>


<div class="feedback">
    <div class="container">
        <h2>Регистрация</h2>
        <form action="/function/reg.php" method="post">
            <div class="inline">
                <div>
                    <label>Логин</label>
                    <input type="text" name="login" id="">
                </div>
                <div>
                    <label>Имя</label>
                    <input type="text" name="username" id="">
                </div>
            </div>
            <label >Email</label>
            <input type="email" class="one-line" name="email">

            <label >Password</label>
            <input type="password" class="one-line" placeholder="*****" name="password">

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</div>

<?php require_once "blocks/footer.php"; ?>

<script src="assets/main.js"></script>
</body>
</html>