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
    <div class="hero container">
        <div class="hero--info">
            <h2>3D game Dev</h2>
            <h1>Работы, которые мы производим для нашего клиента</h1>
            <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum стал эталоном отрасли.</p>
            <button class="btn">Узнать больше</button>
        </div>
        <img src="img/joystick.svg" alt="joystick">
    </div>
    <div class="container trending" >
        <a href="trending.php" class="see-all">Посмотреть все</a>
        <h3>Currently Trending Games</h3>
      

        <div class="games">
            <?php
                require_once __DIR__ . "/function/actions/config.php";

                $sql = "SELECT * FROM trending ORDER BY id ASC LIMIT 4";
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
        <div class="container big-text">
            <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии.</p>
        </div>
        <div class="container banner">
            <h3>
                Lorem Ipsum
            </h3>
            <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum является стандартным текстом-пустышкой в ​​отрасли с 1500-х годов.</p>
            <img src="img/spider.png" alt="">
        </div>
    </div>
</div>
    <div class="features">
        <div class="container">
            <h3>
                Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии.</h3>
                <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии. Lorem Ipsum является стандартным текстом-пустышкой в ​​отрасли с 1500-х годов.</p>
                <div class="info">
                    <div class="block">
                        <img src="img/mob.svg" alt="">
                        <p>Разработка мобильных игр</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                    <div class="block">
                        <img src="img/pc.svg" alt="">
                        <p>Разработка игр для ПК</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                    <div class="block">
                        <img src="img/ps4.svg" alt="">
                        <p> Разработка игр для PS4</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                    <div class="block">
                        <img src="img/vr.svg" alt="">
                        <p>AR/VR Solutions</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                    <div class="block">
                        <img src="img/qub.svg" alt="">
                        <p>AR/ VR design</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                    <div class="block">
                        <img src="img/3d.svg" alt="">
                        <p>3D Modelings</p>
                        <img src="img/arrow 2.svg" alt="">
                    </div>
                </div>        
        </div>
    </div>
    <div class="wrapper">
        <div class="container projects">
            <h3>Наши недавние проекты</h3>
            <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии.</p>
            <div class="images">
                <img src="/img/images0.png" alt="">
                <img src="/img/images1.png" alt="">
                <img src="/img/images2.png" alt="">
            </div>
            <div class="images">
                <img src="/img/images3.png" alt="">
                <img src="/img/images4.png" alt="">
                <img src="/img/images5.png" alt="">
            </div>
            <a href="#" class="see-all">Смотреть все</a>
        </div>
        <div class="container email">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum — это просто текст-пустышка полиграфической и наборной индустрии.</p>
            <div class="block">
                <div>
                    <h4>Оставайтесь в курсе</h4>
                    <p>Подпишитесь, чтобы получать последние новости и обновления о TDA.
                        Обещаем не рассылать вам спам!</p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Введите адрес электронной почты">
                    <button onclick="cheackEmail()">Продолжать</button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>
    <script src="assets/main.js"></script>
</body>
</html>