<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Navitroxa - Оптимизация онлайн-бизнеса</title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Navitroxa - профессиональная оптимизация продаж онлайн-бизнеса. Увеличиваем конверсию, настраиваем воронки продаж, анализируем данные.'; ?>">
    <meta name="keywords" content="оптимизация продаж, онлайн бизнес, конверсия, воронка продаж, цифровой маркетинг, аналитика">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Navitroxa">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональная оптимизация продаж онлайн-бизнеса'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://navitroxa.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="canonical" href="https://navitroxa.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="cookie-banner" class="cookie-banner">
        <div class="container">
            <p>Мы используем файлы cookie для улучшения работы сайта. <a href="/cookies.php">Подробнее</a></p>
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
                        <h2>Navitroxa</h2>
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li><a href="/" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Главная</a></li>
                        <li><a href="/about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">О нас</a></li>
                        <li><a href="/solutions.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'solutions.php' ? 'active' : ''; ?>">Решения</a></li>
                        <li><a href="/contacts.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contacts.php' ? 'active' : ''; ?>">Контакты</a></li>
                    </ul>
                </div>
                
                <div class="nav-toggle" id="nav-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <main>