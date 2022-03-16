<!-- версия HTML - 5 -->
<!DOCTYPE html>

<!-- Язык сайта -->
<html lang="ru">

<!-- Все параметры сайта внутри head -->

<head>
    <meta charset="UTF-8">

    <!-- Название вкладки(страницы) -->
    <title>Лига Джиу-джитсу</title>

    <!-- Настройи иконки на вкладке -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/assets/images/icon.png' ?>" type="image/x-icon">

    <!-- SEO -->
    <meta name="description" content="Learning html">
    <meta name="keywords" content="html, webdev">
    <meta name="author" content="Maksyao">

    <!-- Для корректной работы в IE/Edge -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Подключение стилей -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/assets/css/jquery.bxslider.css' ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() . '/assets/js/jquery.bxslider.js' ?>"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="flex-container">
        <header class="flex-header">
            <a class="logo" href="<?= home_url(); ?>">

                <img class="logo-img" src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" alt="Logo">

                <div class="logo-text">
                    <p>Национальная</p>
                    <p>Спортивная</p>
                    <p>Студенческая</p>
                    <p>Лига Джиу-джитсу</p>
                </div>
            </a>
            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>

            </nav>
        </header>