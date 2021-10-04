<?php
/* Template Name: Home */
$rencontres_hebdomadaires = get_field('rencontres_hebdomadaires');
$notre_mission = get_field('notre_mission');
$spaghetti_des_regates = get_field('spaghetti_des_regates');
get_header(); ?>
    <div class="template_home_page_container">
        <section class="hero_section">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">
            <img class="background" src="<?php echo get_template_directory_uri(); ?>/images/dev/home-hero.jpg" alt="">
            <div class="content">
                <h1 class="title">Club Rotary<br>Salaberry-de-Valleyfield</h1>
                <h2 class="subtitle">Servir d’abord</h2>

                <div class="buttons">
                    <a href="" class="button">Explorez nos actions</a>
                    <a href="" class="button">Nous joindre</a>
                </div>
            </div>
        </section>

        <section class="info_section">
            <div class="info_box">
                <?php echo $rencontres_hebdomadaires; ?>
            </div>
        </section>
        <?php if($spaghetti_des_regates): ?>
            <section class="image_section content_wrap">
                <img src="<?php echo $spaghetti_des_regates['url'] ?>" alt="<?php echo $spaghetti_des_regates['alt'] ?>">
            </section>
        <?php endif; ?>

        <section class="cols_section">
            <h2 class="title content_wrap">Découvrez <br> nos événements</h2>
            <div class="content_wrap_2">
                <div class="cols">
                    <div class="col">
                        <div class="image_holder">
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dev/2.jpg" alt="">
                            <div class="date">
                                <p class="day">16</p>
                                <p class="month">Juin</p>
                                <p class="year">2021</p>
                            </div>
                            <div class="info">
                                <h2 class="post_title">Souper Spaghetti des Régates</h2>
                                <p class="post_desc">Soirée de financement</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image_holder">
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dev/1.jpg" alt="">
                            <div class="date">
                                <p class="day">23</p>
                                <p class="month">Juil</p>
                                <p class="year">2021</p>
                            </div>
                            <div class="info">
                                <h2 class="post_title">Souper Homard du Club Rotary</h2>
                                <p class="post_desc">Soirée de financement</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button_holder">
                    <a href="" class="button dark">Voir le calendrier</a>
                </div>
            </div>
        </section>

        <section class="description_section">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wheel-2.svg" alt="" class="background">
                <?php if($notre_mission['bloc_orange']): ?>
                <div class="box">
                    <?php echo $notre_mission['bloc_orange']; ?>
                    <!-- <p>Notre mission</p>
                    <h2>Construire, soutenir <br>& organiser.</h2> -->
                </div>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if($notre_mission['bloc_bleu']): ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dev/woman.jpg" alt="" class="background">

                    <div class="description">
                        <div class="text_editor">
                            <?php echo $notre_mission['bloc_bleu']; ?>
                        </div>
                        <?php if($notre_mission['bouton']): ?>
                            <div class="button_holder">
                                <a href="<?php echo $notre_mission['bouton']['url']; ?>" class="button"><?php echo $notre_mission['bouton']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section class="news_section">
            <h2 class="title">Nos nouvelles</h2>

            <div class="news_wrap">
                <?php for( $i=0; $i<3; $i++ ): ?>
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
                <?php endfor; ?>
            </div>

            <div class="button_holder">
                <a href="" class="button dark">Lire davantage</a>
            </div>
        </section>
    </div>
<?php
get_footer(); ?>