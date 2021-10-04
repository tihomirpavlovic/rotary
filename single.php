<?php
/* Template Name: Single News */
get_header();

$image = get_img_by_id(get_field('image')); ?>
    <div class="template_single_news_wrap">
        <?php template_section_hero(); ?>

        <div class="template_single_news_content content_wrap">
            <div class="share">
                <?php echo do_shortcode( '[addtoany url="'.get_the_permalink().'" title="'.get_the_title().'"]' );  ?>
            </div>

            <?php if( $image ): ?>
                <div class="featured_image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            <?php endif; ?>

            <div class="single_news_editor">
                <?php the_field('contenu'); ?>

                <?php $citation = get_field('citation');

                if( $citation['citation'] || $citation['prenom_et_nom'] ): ?>
                    <blockquote>
                        <?php if( $citation['citation'] ): ?>
                            <h3><?php echo $citation['citation']; ?></h3>
                        <?php endif; ?>

                        <?php if( $citation['prenom_et_nom'] ): ?>
                            <p><?php echo $citation['prenom_et_nom']; ?></p>
                        <?php endif; ?>
                    </blockquote>
                <?php endif; ?>

                <?php
                $gallery = get_field('galerie_dimages');
                if( $gallery ): ?>
                    <div class="images_wrap">
                        <?php foreach( $gallery as $image ): ?>
                            <div class="image_holder_wrap">
                                <div class="image_holder">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            $total_posts = new WP_Query(array(
                'post_type' => 'actualites',
                'post_per_page' => -1,
                'post_status' => array('publish'),
            ));

            if( $total_posts->found_posts >= 2 ):
                $next_post = get_previous_post();
                $prev_post = get_next_post();

                if( !$next_post ):
                    $news = new WP_Query(array(
                        'post_type' => 'actualites',
                        'posts_per_page' => 1,
                        'post_status' => array('publish'),
                    ));
                    $next_post = $news->posts[0];
                endif;

                if( !$prev_post ):
                    $news = new WP_Query(array(
                        'post_type' => 'actualites',
                        'posts_per_page' => 1,
                        'post_status' => array('publish'),
                        'order' => 'ASC'
                    ));
                    $prev_post = $news->posts[0];
                endif; ?>

                <div class="buttons_holder">
                    <a href="<?php echo get_the_permalink($prev_post->ID); ?>" class="prev button dark">
                        <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="arrow-button-left">
                        <g id="Group">
                        <path id="arrow-left" d="M0 15.8877C0.0304 16.2369 0.17248 16.7031 0.4 16.9646L12.4 30.9134C12.9234 31.6422 14.0027 31.6398 14.667 31.0437C15.3312 30.4475 15.3818 29.3884 14.8 28.7595L5.12496 17.5287H46.4C47.2836 17.5287 48 16.7941 48 15.8877C48 14.9814 47.2836 14.2467 46.4 14.2467H5.12496L14.8 3.01589C15.4349 2.38705 15.2563 1.30857 14.5921 0.712468C13.9278 0.116365 12.9234 0.158868 12.4 0.862047L0.4 14.8108C0.07928 15.1671 0.01808 15.5538 0 15.8877Z" fill="#F6A71E"/>
                        </g>
                        </g>
                        </svg>
                        Retour
                    </a>
                    <a href="<?php echo get_the_permalink($next_post->ID); ?>" class="next button dark">
                        Suivant
                        <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="arrow-button-right">
                        <g id="Group">
                        <path id="Path" d="M48 16.1123C47.9696 15.7631 47.8275 15.2969 47.6 15.0354L35.6 1.08665C35.0766 0.357786 33.9973 0.360165 33.333 0.956266C32.6688 1.55245 32.6182 2.61157 33.2 3.24049L42.875 14.4713L1.59998 14.4713C0.716385 14.4713 -1.52588e-05 15.2059 -1.52588e-05 16.1123C-1.52588e-05 17.0186 0.716385 17.7533 1.59998 17.7533L42.875 17.7533L33.2 28.9841C32.5651 29.6129 32.7437 30.6914 33.4079 31.2875C34.0722 31.8836 35.0766 31.8411 35.6 31.138L47.6 17.1892C47.9207 16.8329 47.9819 16.4462 48 16.1123Z" fill="#F6A71E"/>
                        </g>
                        </g>
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer(); ?>