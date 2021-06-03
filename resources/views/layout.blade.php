<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backstage - тату-студия</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('../img/browse-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('../css/menu.css') }}">
</head>
<body>

    <header id="header" class="header lock-padding">
        <div class="container">
            <div class="header-body">
                <a class="logo" href="{{ route('home') }}"><img src="{{ asset('../img/logo.svg') }}" alt="Логотип" ></a>
                <div class="burger">
                    <span></span>
                </div>
                <div class="burger-background"></div>
                <nav class="menu">

                    <ul class="list">
                        <li><a class="list-link" href="service">Услуги</a></li>
                        <hr>
                        <li><a class="list-link" href="portfolio">Портфолио</a></li>
                        <hr>
                        <li><a class="list-link" href="contacts">Контакты</a></li>
                        <hr>
                        <li>
                            <div class="phone-numbers">
                                <a class="number-link" href="tel:+380664258654">+(380) 66 42 58 654</a>
                                <a class="number-link" href="tel:+380631234567">+(380) 63 12 34 567</a>
                            </div>
                        </li>
                        <hr>
                        <li><a href="#popup" class="small-button popup-link">Записаться</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <a href="#flag"><div class="up"></div></a>
    </header>

    <div id="flag"></div>

@yield('content')

    <div id="popup" class="popup">
        <div class="popup-body">
            <div class="popup-content">
                <a href="#" class="popup-close close-popup" ></a>
                <form class="form" name="form" action="{{ route('contact-form') }}" method="post">
                    @csrf
                    <input required class="input" id="name" name="name" type="text" placeholder="Ваше имя">
                    <input required class="input" id="email" name="email" type="email" placeholder="Ваша почта">
                    <input required class="input" id="phone" name="phone" type="number" placeholder="Ваш номер телефона">
                    <button class="submit popup-link" type="submit" value="Отправить">Перезвоните мне</button>
                </form>
            </div>
        </div>
    </div>

    <div id="popup2" class="popup">
        <div class="popup-body">
            <div class="popup-content">
                <a href="#header" class="popup-close close-popup" ></a>
                <h4>Спасибо! Ожидайте звонка</h4>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-body">
                <a class="f-logo" href="{{ route('home') }}"><img src="{{ asset('../img/logo.svg') }}" alt="Логотип" ></a>
                <nav class="f-menu">
                    <ul class="list1">
                        <li><a class="main-list-link" href="/">Студия тату Backstage</a></li>
                        <li><a class="list-link" href="service">Услуги</a></li>
                        <li><a class="list-link" href="portfolio">Портфолио</a></li>
                        <li><a class="list-link" href="contacts">Контакты</a></li>
                    </ul>
                    <ul class="list2">
                        <li>График работы</li>
                        <li>Пн-Вс: 10:00 - 20:00</li>
                        <li>Телефон: +(380) 66 42 58 654</li>
                        <li>Адрес: Киев, ул. Большая Васильковская, 141</li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('../js/script.js') }}"></script>
    <script src="{{ asset('../js/popup.js') }}"></script>
</body>
</html>
