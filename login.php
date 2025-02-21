<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
<?php require_once "blocks/header.php"; ?>


<div class="feedback">
    <div class="container">
        <h2>Авторизация</h2>
        <form action="/function/login.php" method="post">
            <div class="inline">
                <div>
                    <label>Логин</label>
                    <input type="text" name="login" id="">
                </div>
                <div>
                    <label >Password</label>
                    <input type="password"  placeholder="*****" name="password">
                </div>
            </div>


            <button type="submit">Авторизация</button>
        </form>
    </div>
</div>

<?php require_once "blocks/footer.php"; ?>

<script src="assets/main.js"></script>
</body>
</html>