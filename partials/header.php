<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' | ' : '' ?>Navitroxa - Оптимизация продаж онлайн-бизнеса</title>
    <meta name="description" content="<?= isset($page_description) ? $page_description : 'Navitroxa - эксперты по оптимизации продаж онлайн-бизнеса. Увеличиваем конверсию, автоматизируем процессы, растим прибыль.' ?>">
    <meta name="keywords" content="оптимизация продаж, онлайн-бизнес, конверсия, автоматизация, цифровой маркетинг">
    <meta property="og:title" content="<?= isset($page_title) ? $page_title . ' | ' : '' ?>Navitroxa">
    <meta property="og:description" content="<?= isset($page_description) ? $page_description : 'Оптимизация продаж онлайн-бизнеса' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://navitroxa.com<?= $_SERVER['REQUEST_URI'] ?>">
    <link rel="canonical" href="https://navitroxa.com<?= $_SERVER['REQUEST_URI'] ?>">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-content">
            <p>Мы используем файлы cookie для улучшения работы сайта. Продолжая использовать сайт, вы соглашаетесь с нашей <a href="/cookies.php">политикой использования cookie</a>.</p>
            <div class="cookie-buttons">
                <button id="accept-cookies" class="btn btn-primary">Принять</button>
                <button id="decline-cookies" class="btn btn-secondary">Отклонить</button>
            </div>
        </div>
    </div>

    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="/" class="logo">
                        <img src="/img/logo-nav.png" alt="Navitroxa" class="logo-image" width="28" height="28">
                        <span class="logo-text">Navitroxa</span>
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="/" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="/solutions.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'solutions.php' ? 'active' : '' ?>">Решения</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contacts.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : '' ?>">Контакты</a>
                        </li>
                    </ul>
                    
                    <div class="nav-cta">
                        <a href="/contacts.php" class="btn btn-primary">Получить консультацию</a>
                    </div>
                </div>
                
                <div class="nav-toggle" id="nav-toggle">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">