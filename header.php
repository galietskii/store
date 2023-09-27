<?php wp_head(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php 
$pool_logo = get_field('pool_logo', 'options');
$link_pool = get_field('link_pool', 'options');
?>

<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="header__left">
                        <div class="header__logo">
                            <?php the_custom_logo(); ?>
                        </div>
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
                </div>
                <div class="col-md-5">
                    <div class="header__pool">
                        <img src="<?php echo esc_url($pool_logo['url']); ?>"
                            alt="<?php echo esc_attr($pool_logo['alt']); ?>" />
                        <a href="<?php echo $link_pool['url']; ?>"
                            target="<?php echo $link_pool['target']; ?>"><?php echo $link_pool['title'] ?>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.1623 7.59774H1.54718C1.3142 7.59774 1.12531 7.78663 1.12531 8.01961V9.98836C1.12531 10.2213 1.3142 10.4102 1.54718 10.4102H12.1623V12.0295C12.1623 12.7812 13.0711 13.1577 13.6027 12.6261L16.6282 9.60062C16.9577 9.2711 16.9577 8.73687 16.6282 8.40738L13.6027 5.38187C13.0712 4.85035 12.1623 5.2268 12.1623 5.97851V7.59774Z"
                                    fill="black" />
                                <mask id="mask0_1_163" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1"
                                    y="5" width="16" height="8">
                                    <path
                                        d="M12.1623 7.59774H1.54718C1.3142 7.59774 1.12531 7.78663 1.12531 8.01961V9.98836C1.12531 10.2213 1.3142 10.4102 1.54718 10.4102H12.1623V12.0295C12.1623 12.7812 13.0711 13.1577 13.6027 12.6261L16.6282 9.60062C16.9577 9.2711 16.9577 8.73687 16.6282 8.40738L13.6027 5.38187C13.0712 4.85035 12.1623 5.2268 12.1623 5.97851V7.59774Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#mask0_1_163)">
                                    <rect x="0.000305176" y="0.000244141" width="18" height="18" fill="white" />
                                </g>
                            </svg>

                        </a>
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