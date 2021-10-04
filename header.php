<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/wxr2pch.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header_content">
            <div class="logo_wraper">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.svg" alt="Site Logo"></a>
            </div>
            <div class="nav_holder">
                <div class="cta">
                    <p>Actualité</p>
                    
                    <div class="button_holder">
                        <a class="button" href="#">Accès membre</a>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Le Rotary</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Nos actions</a>

                            <ul class="sub-menu">
                                <li><a href="#">Levées de fonds & activités</a></li>
                                <li><a href="#">Principales réalisations</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calendrier</a></li>
                        <li><a href="#">Membres</a></li>
                        <li><a href="#">Boutique</a></li>
                        <li><a href="#">Nous joindre</a></li>
                    </ul>
                    <a href="#" class="shopping_cart">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shoping-cart.svg" alt="Shoping Cart">
                        <p>0.00 $</p>
                    </a>
                </nav>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <div class="nav_mobile">
        <div class="nav_mobile_content">
            <nav>
                <ul lang="menu">
                    <li><a href="#">Le Rotary</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Nos actions</a>

                        <ul class="sub-menu">
                            <li><a href="#">Levées de fonds & activités</a></li>
                            <li><a href="#">Principales réalisations</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calendrier</a></li>
                    <li><a href="#">Membres</a></li>
                    <li><a href="#">Boutique</a></li>
                    <li><a href="#">Nous joindre</a></li>
                </ul>
            </nav>

            <div class="cta">
                <a href="#" class="button">Accès membre</a>

                <div class="shopping_cart_icon">
                    <div class="shooping_cart_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shoping-cart.svg" alt="Shoping Cart">
                    </div>
                    <p>0.00 $</p>
                </div>
            </div>
        </div>
    </div>