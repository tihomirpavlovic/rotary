<?php
/* Template Name: Home */
$rencontres_hebdomadaires = get_field('rencontres_hebdomadaires');
$notre_mission = get_field('notre_mission');
$spaghetti_des_regates = get_field('spaghetti_des_regates');
$boutons_de_heros = get_field('boutons_de_heros');
$calendrier_section = get_field('calendrier_section');
$actualite_bouton = get_field('actualite_bouton');
$spaghetti_des_regates_link = get_field('spaghetti_des_regates_link');
get_header(); ?>
    <div class="template_home_page_container">
        <section class="hero_section">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">
            <img class="background" src="<?php echo get_template_directory_uri(); ?>/images/dev/home-hero.jpg" alt="">
            <div class="content">
                <h1 class="title">Club Rotary<br>Salaberry-de-Valleyfield</h1>
                <h2 class="subtitle">Servir d’abord</h2>
                
                <?php if($boutons_de_heros): ?>
                <div class="buttons">
                    <?php if($boutons_de_heros['first_bouton']): ?>
                    <a href="<?php echo $boutons_de_heros['first_bouton']['url']; ?>" class="button" target="<?php echo $boutons_de_heros['first_bouton']['target']; ?>"><?php echo $boutons_de_heros['first_bouton']['title']; ?></a>
                    <?php endif; ?>
                    <?php if($boutons_de_heros['second_bouton']): ?>
                    <a href="<?php echo $boutons_de_heros['second_bouton']['url']; ?>" class="button" target="<?php echo $boutons_de_heros['second_bouton']['target']; ?>"><?php echo $boutons_de_heros['second_bouton']['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>

        <?php if( $rencontres_hebdomadaires ): ?>
            <section class="info_section">
                <div class="info_box">
                    <?php echo $rencontres_hebdomadaires; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if( $spaghetti_des_regates ): $spaghetti_des_regates = get_img_by_id($spaghetti_des_regates); ?>
            <a href="<?php echo $spaghetti_des_regates_link ?>" target="_blank">
                <section class="image_section content_wrap">
                    <img src="<?php echo $spaghetti_des_regates['url'] ?>" alt="<?php echo $spaghetti_des_regates['alt'] ?>">
                </section>
            </a>
        <?php endif; ?>

        <?php
        $events = new WP_Query(array(
            'post_type' => 'mec-events',
            'posts_per_page' => 2,
            'order_by' => 'start_date',
            'order' => 'ASC',
            'post_status' => array('publish'),
        ));

        if( $events->have_posts() ): ?>
            <section class="cols_section">
                <h2 class="title content_wrap">Découvrez <br> nos événements</h2>
                <div class="content_wrap_2">
                    <div class="cols">
                        <?php while ( $events->have_posts() ): $events->the_post();
                            $categories = get_the_terms(get_the_ID(), 'mec_category');
                            $myvals = get_post_meta(get_the_ID());

                            // var_dump($myvals, 'mec_start_date');

                            foreach($myvals as $key=>$val){
                                foreach($val as $vals){
                                  if ($key=='mec_start_date'){
                                    $time=strtotime($vals);
                                    $month=date("F",$time);
                                    $year=date("Y",$time);
                                    $day=date("d",$time);
                                  }
                                 }
                               }
                        ?>
                            <div class="col">
                                <div class="image_holder">
                                    <?php if( get_the_post_thumbnail() ): ?>
                                        <div class="overlay"></div>
                                        <?php echo get_the_post_thumbnail(); ?>
                                    <?php endif; ?>

                                    <div class="date">
                                        <?php echo $startday; ?>
                                        <p class="day"><?php echo $day; ?></p>
                                        <p class="month"><?php echo $month; ?></p>
                                        <p class="year"><?php echo $year; ?></p>
                                    </div>
                                    <div class="info">
                                        <h2 class="post_title"><?php the_title(); ?></h2>

                                        <?php if( $categories ): ?>
                                            <p class="post_desc">
                                                <?php foreach( $categories as $cat ): ?>
                                                    <span><?php echo $cat->name; ?></span>
                                                <?php endforeach; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- <div class="button_holder">
                        <a href="/calendrier" class="button dark">Voir le calendrier</a>
                    </div> -->

                    <?php if($calendrier_section): ?>
                        <div class="button_holder">
                            <?php if($calendrier_section['first_bouton']): ?>
                            <a href="<?php echo $calendrier_section['first_bouton']['url']; ?>" class="button dark" target="<?php echo $calendrier_section['first_bouton']['target']; ?>"><?php echo $calendrier_section['first_bouton']['title']; ?></a>
                            <?php endif; ?>
                            <?php if($calendrier_section['first_bouton']): ?>
                            <a href="<?php echo $calendrier_section['second_bouton']['url']; ?>" class="button dark" target="<?php echo $calendrier_section['second_bouton']['target']; ?>"><?php echo $calendrier_section['second_bouton']['title']; ?></a>
                            <?php endif; ?>
                        </div>    
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if( $notre_mission['bloc_orange'] || $notre_mission['bloc_bleu'] ): ?>
            <section class="description_section">
                <div class="left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wheel-2.svg" alt="" class="background">
                    <?php if( $notre_mission['bloc_orange'] ): ?>
                        <div class="box">
                            <?php echo $notre_mission['bloc_orange']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <?php if( $notre_mission['bloc_bleu'] ): ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dev/woman.jpg" alt="" class="background">

                        <div class="description">
                            <div class="text_editor">
                                <?php echo $notre_mission['bloc_bleu']; ?>
                            </div>

                            <?php
                            $link = $notre_mission['bouton'];
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <div class="button_holder">
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo esc_html( $link_title ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php
        $news = new WP_Query(array(
            'post_type' => 'actualites',
            'posts_per_page' => 3,
            'post_status' => array('publish'),
            'order'				=> 'DESC',
            'orderby'			=> 'date',
            'meta_key'			=> 'date',
            'meta_type'			=> 'DATE'
        ));
        if( $news->have_posts() ): ?>
            <section class="news_section">
                <h2 class="title">Nos nouvelles</h2>

                <div class="news_wrap">
                   <?php print_posts($news); ?>
                </div>
                <?php if($actualite_bouton): ?>
                <div class="button_holder">
                    <a href="<?php echo $actualite_bouton['url']; ?>" target="<?php echo $actualite_bouton['target']; ?>" class="button dark"><?php echo $actualite_bouton['title']; ?></a>
                </div>
                <?php endif ?>
            </section>
        <?php endif; ?>
    </div>
<?php
get_footer(); ?>