<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
<?php require_once "blocks/header.php"; ?>

<div class="feedback">
    <div class="container">
        <h2>Кабинет пользователя</h2>
        <p>Привет: <?php echo  $_COOKIE['login']?></p>
        <form action="/function/add-game.php" method="post">
            <label>Изображение</label>
            <input type="text" class="one-line" name="image">

            <label >Подписчики</label>
            <input type="text" class="one-line"  name="followers">

            <button type="submit">Добавить</button>
        </form>
    </div>
</div>



<?php require_once "blocks/footer.php"; ?>
</body>
</html>