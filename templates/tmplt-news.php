<?php
/* Template Name: News */
get_header(); ?>
    <div class="template_news_wrap">
        <div class="global_hero">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">
            <div class="image_holder">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dev/global_banner.jpg" alt="">
            </div>
            <div class="hero_headline_wrap">
                <h2 class="hero_headline">
                    Actualité
                </h2>
            </div>
        </div>

        <div class="template_news_content content_wrap">
            <div class="page_hero_descripton">
                <h2>Nos nouvelles</h2>
            </div>

            <div class="filters_holder">
                <div class="filter_wrap">
                    <div class="single_item">
                        <p>
                            Tous
                        </p>
                    </div>
                    <div class="single_item">
                        <p>
                            Rotary Sallabery-de-Valleryfield
                        </p>
                    </div>
                    <div class="single_item">
                        <p>
                            Rotary International
                        </p>
                    </div>
                </div>
            </div>

            <div class="news_wrap">
                <a class="single_news">
                    <div class="image_holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dev/spaghetti.jpg" alt="">
                    </div>

                    <div class="news_info">
                        <h3>Titre de l’article</h3>
                        <div class="date">
                            22 mars 2021
                        </div>

                        <div class="opener">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>
                <a class="single_news">
                    <div class="image_holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dev/spaghetti.jpg" alt="">
                    </div>

                    <div class="news_info">
                        <h3>Titre de l’article</h3>
                        <div class="date">
                            22 mars 2021
                        </div>

                        <div class="opener">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>
                <a class="single_news">
                    <div class="image_holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dev/spaghetti.jpg" alt="">
                    </div>

                    <div class="news_info">
                        <h3>Titre de l’article</h3>
                        <div class="date">
                            22 mars 2021
                        </div>

                        <div class="opener">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>
                <a class="single_news">
                    <div class="image_holder">
                        <img class="no_image_logo" src="<?php echo get_template_directory_uri(); ?>/images/no-post-image-logo.svg" alt="">
                    </div>

                    <div class="news_info">
                        <h3>Titre de l’article</h3>
                        <div class="date">
                            22 mars 2021
                        </div>

                        <div class="opener">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="button_holder">
                <a href="" class="button dark">Plus d’articles</a>
            </div>
        </div>
    </div>
<?php
get_footer(); ?>