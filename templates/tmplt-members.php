<?php
/* Template Name: Members */
$categorie_de_membre = get_field('categorie_de_membre');
get_header(); ?>
    <div class="template_members_wrap">
        <?php template_section_hero(); ?>

        <div class="template_members_content content_wrap">
            <?php if($categorie_de_membre): ?>
                <?php foreach ($categorie_de_membre as $singleCategory): ?>
                    <div class="single_member_group">
                        <h2><?php echo $singleCategory['categorie'] ?></h2>
                        <?php if($singleCategory['membres']): ?>
                            <div class="members_wrap">
                                <?php foreach ($singleCategory['membres'] as $singleMember): ?>
                                    <div class="single_member">
                                        <div class="image_holder_wrap">
                                            <div class="image_holder">
                                                <?php if($singleMember['image']): ?>
                                                    <img src="<?php echo $singleMember['image']['url']; ?>" alt="<?php echo $singleMember['image']['alt']; ?>" class="single_member_image">
                                                <?php else: ?>
                                                    <img class="no_image_logo" src="<?php echo get_template_directory_uri(); ?>/images/no-post-image-logo.svg" alt="">
                                                <?php endif; ?>
                                            </div>

                                            <div class="social_icons">
                                                <?php if($singleMember['linkedin']): ?>
                                                    <a href="<?php echo $singleMember['linkedin']; ?>" class="linkedin">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin.svg" alt="">
                                                    </a>
                                                <?php endif; ?>
                                                <?php if($singleMember['email']): ?>
                                                    <a href="<?php echo $singleMember['email']; ?>" class="email">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/email.svg" alt="">
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <h3>
                                            <?php echo $singleMember['nom']; ?>
                                        </h3>

                                        <p>
                                            <?php echo $singleMember['titre']; ?>
                                        </p>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach ?>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer(); ?>