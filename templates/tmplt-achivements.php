<?php
/* Template Name: Achivements */

$texte_introduction = get_field('texte_introduction');
$projets = get_field('projets');

get_header(); ?>
    <div class="template_achivements_wrap">
        <div class="global_hero">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">
            <div class="image_holder">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dev/global_banner.jpg" alt="">
            </div>
            <div class="hero_headline_wrap">
                <h2 class="hero_headline">
                    <?php echo get_the_title(); ?>
                    <!-- Principales <br> réalisations -->
                </h2>
            </div>
        </div>

        <div class="template_achivements_content content_wrap">
            <?php if($texte_introduction): ?>
                <div class="page_hero_descripton">
                    <?php echo $texte_introduction; ?>
                </div>
            <?php endif; ?>
            <?php if($projets): ?>
                <div class="achivements_list">
                    <?php foreach ($projets as $singleProjects): ?>
                        <div class="single_item">
                            <div class="left">
                                <?php if($singleProjects['image']): ?>
                                    <div class="image_holder">
                                        <img src="<?php echo $singleProjects['image']['url'] ?>" alt="<?php echo $singleProjects['image']['alt'] ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="right">
                                <?php if($singleProjects['texte']): ?>
                                    <?php echo $singleProjects['texte'] ?>
                                <?php endif; ?>
                                <?php if($singleProjects['site_web']): ?>
                                    <a href="<?php echo $singleProjects['site_web'] ?>">
                                        Site web
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer(); ?>