<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css<?= '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>">
    <!--<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon.ico">-->
    <!-- corinthia @importでは反映しなかったのでこちらで指定 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Corinthia&display=swap" rel="stylesheet">
</head>
<body>
<?php wp_body_open(); ?>
    <header class="header">
            <div class="header__logo-area">
                <a href="<?= home_url('#top') ?>">
                    <p class="header__logo">
                        株式会社ミライ企画
                    </p>
                </a>
            </div>
        <nav class="navbar">
            <ul class="nav-links font-cormorant">
                <li><a href="<?= home_url('#message') ?>">message</a></li>
                <li><a href="<?php echo home_url('/aboutus'); ?>">aboutus</a></li>
                <li><a href="<?= home_url('#service') ?>">service</a></li>
                <li><a href="<?= home_url('#shop') ?>">shop</a></li>
                <li><a href="<?= home_url('#contact') ?>">contact</a></li>
            </ul>
            <button class="menu-toggle" aria-label="メニューを開く">
                <span class="bar bar1"></span>
                <span class="bar bar2"></span>
                <span class="bar bar3"></span>
            </button>
        </nav>
        <div class="overlay"></div>
    </header>
<main>
