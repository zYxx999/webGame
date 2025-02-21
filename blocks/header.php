<header class="container">
    <span class="logo">logo</span>
    <nav>
        <ul>
            <li class="active"><a href="/">Главная</a></li>
            <li><a href="/about.php">О нас</a></li>

            <?php
            if(isset($_COOKIE['login']))
                echo '<li><a href="/user.php">Кабинет пользователя</a></li>';
            else
                echo '<li><a href="/register.php">Регистрация</a></li>
            <li><a href="/login.php">Авторизация</a></li>';


                ?>

            <li class="btn"><a href="contacts.php">Contacts</a></li>
        </ul>
    </nav>
</header>