<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин «Немо»</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/default.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="service-controls">
            <button class="shop-cart cart-disabled" tabindex="0">
                <span class="tooltip">Корзина пуста</span>
            </button>
            <button class="shop-auth" tabindex="0"></button>
            <button class="shop-news" tabindex="0">
                <span class="tooltip">Новости и события</span>
            </button>
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
                    <a class="links menu-link" href="/">
                        О магазине
                    </a>
                </li>
                <li class="menu-item">
                    <a class="links menu-link" href="/">
                        Оплата и доставка
                    </a>
                </li>
                <li class="menu-item">
                    <a class="links menu-link" href="/">
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
