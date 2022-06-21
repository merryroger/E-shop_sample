<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин «Немо»</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/default.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="service-controls">
            <button class="shop-cart cart-disabled" tabindex="0">
                <span class="tooltip">Корзина пуста</span>
            </button>
            <button class="shop-auth" tabindex="0">
                <span class="tooltip">Личный кабинет: вход / регистрация</span>
            </button>
            <button class="shop-news" tabindex="0">
                <span class="tooltip">Новости и события</span>
            </button>
            <div class="auth-panel hidden">
                <h6>Личный кабинет</h6>
                <form class="sign-form" action="/" method="post">
                    <label class="sign-form-label label-auth-type" for="email">Войти:</label>
                    <select class="sign-form-element auth-type" name="auth-type" id="auth-type">
                        <option value="email" selected>через e-mail</option>
                        <option value="login">по id и паролю</option>
                    </select>
                    <label class="sign-form-label label-email" for="email">Логин:</label>
                    <input class="sign-form-element" name="email" id="email" type="email" placeholder="Ваш e-mail" required>
                    <label class="sign-form-label label-password" for="password">Пароль:</label>
                    <input class="sign-form-element" name="password" id="password" type="password" required>
                    <input class="sign-form-button" type="button" value="Отправить">
                </form>
                <button class="sign-mode-button" type="button">
                    <span>Хочу зарегистрироваться</span>
                </button>
            </div>
        </div>
        <img src="./images/Logo.jpg" alt="Логотип Немо">
        <div class="headers">
            <h2>Интернет-магазин</h2>
            <h1>Немо</h1>
            <h3>Всё для подводных лодок</h3>
        </div>
        <nav class="header__nav">
            <ul class="ul-reset header-menu-list">
                <li class="menu-item">
                    <a class="links menu-link" href="/about">
                        О магазине
                    </a>
                </li>
                <li class="menu-item">
                    <a class="links menu-link" href="/pay_and_delivery">
                        Оплата и доставка
                    </a>
                </li>
                <li class="menu-item">
                    <a class="links menu-link" href="/contacts">
                        Контактная информация
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main class="main">
    <div class="container">
        <div class="search-panel">
            <form class="search-form" action="/search" method="post">
                <input class="search-element input-text" type="text" placeholder="Поиск по каталогу" required>
                <button class="search-element submit-button" type="button"><span>Найти</span></button>
            </form>
        </div>
        <div class="main-contents no-data">
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container">
        <div class="data-col title-col">
            <h5>Интернет-магазин<br>«Капитан первого ранга, товарищ Немо»</h5>
            <h6>Товары для&nbsp;подводных лодок</h6>
        </div>
    </div>
</footer>
</body>

</html>
