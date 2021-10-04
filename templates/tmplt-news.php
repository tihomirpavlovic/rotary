<?php
/* Template Name: News */
get_header();
$filtered_cat = ( isset($_GET["catégorie"]) ) ? $_GET["catégorie"] : "";
?>
    <div class="template_news_wrap">
        <?php template_section_hero(); ?>

        <div class="template_news_content content_wrap">
            <div class="page_hero_descripton">
                <h2>Nos nouvelles</h2>
            </div>

            <?php
            $field_key = "field_6141fb316907b";
            $field = get_field_object($field_key);
            if( $field ):?>
                <div class="filters_holder" id="nouvelles">
                    <div class="filter_wrap">
                        <a href="<?php the_permalink(); ?>#nouvelles" class="single_item <?php echo ( !$filtered_cat ) ? ' active' : null; ?>">
                            <p>Tous</p>
                        </a>
                        <?php foreach( $field['choices'] as $key => $value ): ?>
                            <a href="<?php the_permalink(); ?>?catégorie=<?php echo $key; ?>#nouvelles" class="single_item <?php echo ( $filtered_cat == $key ) ? ' active' : null; ?>">
                                <p><?php echo $value; ?></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $posts_per_page = 3;

            $args = array(
                'post_type' => 'actualites',
                'posts_per_page' => $posts_per_page,
                'post_status' => array('publish'),
                'order'	=> 'DESC',
                'orderby' => 'date',
                'meta_key' => 'date',
                'meta_type'	=> 'DATE',
                'meta_query' => array()
            );

            if( $filtered_cat ):
                array_push($args['meta_query'],array(
                    'key' => 'categorie',
                    'value' => $filtered_cat,
                    'compare' => '=',
                ));
            endif;

            $news = new WP_Query($args);

            if( $news->have_posts() ): ?>
                <div class="news_wrap" id="response" data-action="<?php echo site_url() ?>/wp-admin/admin-ajax.php">
                    <?php print_posts($news); ?>
                </div>

                <div class="button_holder">
                    <button class="button dark load_more_btn <?php echo ( $posts_per_page >= $news->found_posts ) ? ' disabled' : null; ?>" data-total-posts="<?php echo $news->found_posts; ?>" data-category="<?php echo $filtered_cat; ?>">
                        Plus d’articles
                    </button>
                </div>
            <?php else: ?>
                <div class="no_results">
                    <p>Pas de résultat</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer(); ?>