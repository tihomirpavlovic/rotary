<?php
function template_section_hero( $data = [] ) {
    $image = get_field('desktop');
    $tablet_image = get_field('tablet');
    $mobile_image = get_field('mobile');
    $title = get_the_title(); ?>
    <section class="template_section_hero">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/wheel.svg" alt="">

        <div class="image_holder">
            <?php if( $mobile_image ): ?>
                <img class="mobile" src="<?php echo $mobile_image['url']; ?>" alt="<?php echo $mobile_image['alt']; ?>">
            <?php endif; ?>

            <?php if( $tablet_image ): ?>
                <img class="tablet" src="<?php echo $tablet_image['url']; ?>" alt="<?php echo $tablet_image['alt']; ?>">
            <?php endif; ?>

            <?php if( $image ): ?>
                <img class="desktop" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>
        </div>

        <?php if( $title  ): ?>
            <div class="hero_headline_wrap">
                <h2 class="hero_headline"><?php echo $title; ?></h2>
            </div>
        <?php endif; ?>
    </section>
<?php }