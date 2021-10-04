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
                    <a href="" class="cta_link">Actualité</a>
                    
                    <div class="button_holder">
                        <a class="button" href="#">Accès membre</a>
                    </div>
                </div>

                <?php if( has_nav_menu('menu-1') ): ?>
                    <nav>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container' => false,
                            )
                        ); ?>
                        <a href="#" class="shopping_cart">
                            <svg width="56" height="46" viewBox="0 0 56 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="panier-icone">
                                    <g id="Group">
                                        <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M17.7116 39.2972C17.7116 35.9457 20.3814 33.1857 23.7023 33.1857C27.0233 33.1857 29.693 35.88 29.693 39.2972C29.693 42.7143 27.0233 45.4743 23.7023 45.4743C20.3814 45.4743 17.7116 42.7143 17.7116 39.2972ZM23.7023 41.5314C24.8744 41.5314 25.7861 40.48 25.7861 39.2972C25.7861 38.1143 24.8744 37.1286 23.7023 37.1286C22.5302 37.1286 21.6186 38.1143 21.6186 39.2972C21.6186 40.5457 22.5302 41.5314 23.7023 41.5314Z" fill="white"/>
                                        <path id="Shape_2" fill-rule="evenodd" clip-rule="evenodd" d="M36.4 39.2972C36.4 35.9457 39.0698 33.1857 42.3907 33.1857C45.6465 33.1857 48.3163 35.88 48.3814 39.2972C48.3814 42.7143 45.7116 45.4743 42.3907 45.4743C39.0698 45.4743 36.4 42.7143 36.4 39.2972ZM42.3256 41.5314C43.4977 41.5314 44.4093 40.48 44.4093 39.2972C44.4093 38.1143 43.4977 37.1286 42.3256 37.1286C41.1535 37.1286 40.2419 38.1143 40.2419 39.2972C40.2419 40.5457 41.1535 41.5314 42.3256 41.5314Z" fill="white"/>
                                        <path id="Shape_3" fill-rule="evenodd" clip-rule="evenodd" d="M53.5256 7.42572C54.1116 7.42572 54.6977 7.68857 55.0884 8.21429C55.4791 8.74 55.6093 9.39714 55.3488 9.98857L50.5953 25.8257C49.6837 28.9143 46.9488 30.9514 43.7581 30.9514H23.2465C20.1209 30.9514 17.3209 28.9143 16.4093 25.8914L10.4186 6.37429C10.093 5.25714 9.11628 4.53429 7.94418 4.53429H2.4093C1.30232 4.53429 0.455811 3.68 0.455811 2.56286C0.455811 1.44572 1.30232 0.591431 2.4093 0.591431H7.94418C10.8744 0.591431 13.3488 2.43143 14.1953 5.19143L14.9116 7.42572H53.5256ZM46.9488 24.6429L50.9209 11.3686H16.0837L20.186 24.6429C20.6419 26.0229 21.8791 26.9429 23.3116 26.9429H43.8232C45.2558 26.9429 46.5581 26.0229 46.9488 24.6429Z" fill="white"/>
                                    </g>
                                </g>
                            </svg>

                            <p>0.00 $</p>
                        </a>
                    </nav>
                <?php endif; ?>
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
            <?php if( has_nav_menu('menu-1') ): ?>
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'container' => false,
                        )
                    ); ?>
                </nav>
            <?php endif; ?>

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