<?php get_header(); ?>
<div class="page_404_container">
    <img class="background" src="<?php echo get_template_directory_uri(); ?>/images/dev/404.jpg" alt="">
    <div class="overlay"></div>

    <div class="content">
        <h1 class="title">404. Page is lost</h1>
        <div class="description">
            <p>Oops! The page you were looking for does not exist. Do not worry, we will get you back in.</p>
        </div>
        <a href="<?php echo get_site_url(); ?>" class="button">Go Home</a>
    </div>
</div>
<?php get_footer();
