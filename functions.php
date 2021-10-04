<?php
if ( ! function_exists( 'site_setup' ) ) :
	function site_setup() {
        //Remove emoji script
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        //Remove emoji script END
        add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'rotary' ),
            )
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'site_setup' );

function site_scripts() {
	wp_enqueue_style( 'site-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_theme_file_uri('/js/plugins/swiper-min.js'), NULL, '6.8.1', true);
    wp_enqueue_script('global', get_theme_file_uri('/js/global.js'), NULL, '1.0', true);
    wp_localize_script('global','site_data',array(
        'site_url' => site_url(),
        'theme_url' => get_template_directory_uri(),
    ));
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

//Remove gutenberg styles
function remove_block_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
//Remove gutenberg styles END

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Global Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

require_once("inc/additional-functions.php");
require_once("inc/custom-posts-types.php");
require_once("inc/custom-taxonomies.php");

//Include all templates sections
foreach (new DirectoryIterator(get_stylesheet_directory().'/templates-sections/') as $fileInfo) {
    if($fileInfo->isDot()) continue;
    require_once(get_stylesheet_directory().'/templates-sections/'.$fileInfo->getFilename());
}

//Posts filter - Load more
function posts_filter(){
    $filtered_cat = $_POST['category'];
    $filtered_page = $_POST['page'];

    $args = array(
        'post_type' => 'actualites',
        'posts_per_page' => 3,
        'post_status' => array('publish'),
        'paged' => $filtered_page,
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

    $posts = new WP_Query($args);
    print_posts($posts);
    die;
}

function print_posts($query){
    while( $query->have_posts() ): $query->the_post();
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
    <?php endwhile; wp_reset_postdata();
}
add_action('wp_ajax_postsfilter', 'posts_filter'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_postsfilter', 'posts_filter');
//Posts filter - Load more - END