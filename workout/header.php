<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

    <!-- <link rel="stylesheet" href="css/style.min.css"> -->
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="index.html" class="logo">
                <svg width="238" height="122">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#logo"></use>
                </svg>
            </a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary-menu', // This should match the menu location you registered in your theme's functions.php file
                    'menu_class' => 'menu__list', // CSS class for the <ul> element
                    'container' => 'nav', // Wrap the menu in a <nav> element
                    'container_class' => 'menu', // CSS class for the <nav> element
                ));
            ?>

            <div class="authorize">
                <button class="authorize__btn login">login</button>
                <button class="authorize__btn sign-in">sign in</button>
            </div>

            <button class="mobile-menu__btn">
                <svg width="22" height="20">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#burger"></use>
                </svg>
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'burger-menu', // Вказуємо наше зареєстроване меню "Mobile Menu"
                    'menu_class' => 'mobile-menu__list', // CSS клас для елементу <ul>
                    'container' => 'nav', // Обгортка меню в елемент <nav>
                    'container_class' => 'mobile-menu', // CSS клас для елементу <nav>
                )
            );
            ?>
            <div class="mobile-authorize">
                    <button class="mobile-authorize__btn login">login</button>
                    <button class="mobile-authorize__btn sign-in">sign in</button>
                </div>
            <!-- <nav class="mobile-menu">
                <ul class="mobile-menu__list">
                    <li class="mobile-menu__list-item">
                        <a href="#" class="mobile-menu__list-link">EXERCICES</a>
                    </li>
                    <li class="mobile-menu__list-item">
                        <a href="#" class="mobile-menu__list-link">COMMUNITY</a>
                    </li>
                    <li class="mobile-menu__list-item">
                        <a href="#" class="mobile-menu__list-link">PRICING</a>
                    </li>
                    <li class="mobile-menu__list-item">
                        <a href="#" class="mobile-menu__list-link">ABOUT US</a>
                    </li>
                </ul>
                <div class="mobile-authorize">
                    <button class="mobile-authorize__btn login">login</button>
                    <button class="mobile-authorize__btn sign-in">sign in</button>
                </div>
            </nav> -->

        </div>
    </div>
</header>