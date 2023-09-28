<!doctype html>
<html lang="en">


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-1 col-sm-6">
                    <div class="header__left">
                        <div class="header__logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 h-menu">
                    <div class="header__menu">
                        <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container_class' => 'custom-menu-class')); ?>
                    </div>
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="col-md-11 search">
                    <form action="">
                        <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z"
                                fill="white" />
                        </svg>
                        <input type="search" id="site-search" placeholder="Search for products" name="q" />
                        </div>
                        <i class="fa-solid fa-xmark closes"></i>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 h-menu right-menu">
                    <div class="header__right">
                        <?php if($header_login = get_field('header_login', 'options')): ?>
                        <div class="header__right-login">
                            <a href="<?php echo $header_login['url']; ?>"
                                target="<?php echo $header_login['target']; ?>"><?php echo $header_login['title']; ?></a>
                        </div>
                        <?php endif; ?>
                        <div class="header__right-search">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z"
                                    fill="white" />
                            </svg>

                        </div>
                    </div>
                </div>

                <nav class="mobile-nav">
                    <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'custom-menu-class')); ?>
                </nav>
            </div>
        </div>
    </header>