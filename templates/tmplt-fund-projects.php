<?php
/* Template Name: Fundraising Projects */
$texte_dintroduction = get_field('texte_dintroduction');
$organismes = get_field('organismes');
$principales_activites = get_field('principales_activites');
get_header(); ?>
    <div class="template_fundraising_wrap">
        <div class="global_hero">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">
            <div class="image_holder">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dev/global_banner.jpg" alt="">
            </div>
            <div class="hero_headline_wrap">
                <h2 class="hero_headline">
                    <?php echo get_the_title(); ?>
                </h2>
            </div>
        </div>

        <div class="template_fundraising_content content_wrap">
            <?php if($texte_dintroduction): ?>
                <div class="page_hero_descripton">
                    <?php echo $texte_dintroduction; ?>
                </div>
            <?php endif; ?>

            <?php if($organismes): ?>
                <div class="list_section">
                    <div class="list_section_content">
                        <?php echo $organismes; ?>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="orange_box">
                <div class="orange_box_content">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/calendar.svg" alt="">
                    </div>

                    <div class="box_info">
                        <h3>Consultez notre <br> calendrier</h3>
                        <p>Pour ne rien manquer de nos prochaines activités ou événements!</p>
                        <div class="button_holder">
                            <a href="" class="button">COMMANDER</a>
                        </div>
                    </div>

                    <div class="button_holder">
                        <a href="" class="button">Voir le calendrier</a>
                    </div>
                </div>
            </div>

            <div class="activities_section">
                <h2>Principales activités <br> de levées de fonds</h2>
                <?php if($principales_activites): ?>
                    <?php foreach ($principales_activites as $singleActivity): ?>
                        <div class="single_activity">
                            <div class="left">
                                <?php if($singleActivity['galerie_dimages']):  ?>
                                    <div class="swiper-container single_activity_swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($singleActivity['galerie_dimages'] as $singleImage): ?>
                                                <div class="swiper-slide">
                                                    <div class="image_holder">
                                                        <img src="<?php echo $singleImage['url'] ?>" alt="<?php echo $singleImage['alt'] ?>">
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="right">
                                <?php if($singleActivity['texte']): ?>
                                    <?php echo $singleActivity['texte']; ?>
                                
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>

            <div class="past_fundriser">
                <h2>Levées de fonds passées</h2>

                <div class="single_fundriser">
                    <h3>Le Pizzaghetti, en collaboration avec le restaurant Mikes </h3>
                    <p>
                        2000-2010
                    </p>
                </div>
                <div class="single_fundriser">
                    <h3>Le Pizzaghetti, en collaboration avec le restaurant Mikes </h3>
                    <p>
                        2000-2010
                    </p>
                </div>
                <div class="single_fundriser">
                    <h3>Le Pizzaghetti, en collaboration avec le restaurant Mikes </h3>
                    <p>
                        2000-2010
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer(); ?>