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

        <?php
        $news = new WP_Query(array(
            'post_type' => 'actualites',
            'posts_per_page' => 3,
            'post_status' => array('publish')
        ));
        if( $news->have_posts() ): ?>
            <section class="news_section">
                <h2 class="title">Nos nouvelles</h2>

                <div class="news_wrap">
                    <?php while( $news->have_posts() ): $news->the_post();
                    $date = get_field('date');
                    $image = get_field('image');
                    ?>
                        <a href="<?php the_permalink(); ?>" class="single_news">
                            <div class="image_holder">
                                <?php if( $image ): $image = get_img_by_id($image); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php else: ?>
                                    <img class="no_image_logo" src="<?php echo get_template_directory_uri(); ?>/images/no-post-image-logo.svg" alt="">
                                <?php endif; ?>
                            </div>

                            <div class="news_info">
                                <h3><?php the_title(); ?></h3>

                                <?php if( $date ): ?>
                                    <div class="date"><?php echo $date; ?></div>
                                <?php endif; ?>

                                <div class="opener">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <div class="button_holder">
                    <a href="" class="button dark">Lire davantage</a>
                </div>
            </section>
        <?php endif; ?>
    </div>
<?php
get_footer(); ?>