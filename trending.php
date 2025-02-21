<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="UTF-8">
    <title>Games Web</title>
</head>
<body>
<div class="wrapper">
    <?php require_once "blocks/header.php"; ?>

    <div class="container trending" >
        <h3>Currently Trending Games</h3>


        <div class="games">
            <?php
            require_once __DIR__ . "/function/actions/config.php";

            $sql = "SELECT * FROM trending ORDER BY id ASC ";
            $query = $pdo->prepare($sql);
            $query->execute();
            $games = $query->fetchAll(PDO::FETCH_OBJ);

            foreach ($games as $game) {
                echo '
                    <div class="block">
                <img src="/img/'.$game->image.'" alt="">
                <span><img src="img/fire 1.svg" alt="">'.$game->followers.'</span>
            </div>';
            }
            ?>
        </div>
    </div>

<?php require_once "blocks/footer.php"; ?>
<script src="assets/main.js"></script>
</body>
</html>
