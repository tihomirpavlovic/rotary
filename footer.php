<?php 
    $boutique_en_ligne = get_field('boutique_en_ligne', 'option');
    $joindre_le_rotary = get_field('joindre_le_rotary', 'option');
    $medias_sociaux = get_field('medias_sociaux', 'option');
?>
<div class="content_wrap">
    <div class="orange_box footer">
        <div class="orange_box_content">
            <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/footer_icon.svg" alt="">
            </div>
            <div class="box_info">
                <?php echo $boutique_en_ligne['texte'] ?>
                

                <?php if($boutique_en_ligne['bouton']): ?>
                    <div class="button_holder">
                        <a href="<?php echo $boutique_en_ligne['bouton']['url'] ?>" class="button"><?php echo $boutique_en_ligne['bouton']['title'] ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($boutique_en_ligne['bouton']): ?>
                <div class="button_holder">
                    <a href="<?php echo $boutique_en_ligne['bouton']['url'] ?>" target="<?php echo $boutique_en_ligne['bouton']['target'] ?>" class="button"><?php echo $boutique_en_ligne['bouton']['title'] ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<footer class="site_footer">

    <div class="footer_content">
        <h3 class="title">Joindre Le Rotary</h3>

        <div class="email_site_social_media">
            <div class="left">
                <?php if($joindre_le_rotary): ?>
                    <?php if($joindre_le_rotary['district']): ?>
                        <h5><?php echo $joindre_le_rotary['district'] ?></h5>
                    <?php endif; ?>
                    <?php if($joindre_le_rotary['courriel']): ?>
                        <p><span>Courriel :</span> <a href="mailto:<?php echo $joindre_le_rotary['courriel'] ?>"><?php echo $joindre_le_rotary['courriel'] ?></a></p>
                    <?php endif; ?>
                    <?php if($joindre_le_rotary['site_web_international']): ?>
                        <p><span>Site web international :</span> <a href="<?php echo $joindre_le_rotary['site_web_international'] ?>" target="_blank">rotary.org</a></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if($medias_sociaux):?>
                <h4 class="social_media_title">Suivez-nous</h4>

                <div class="social_media">
                    <?php if($medias_sociaux['lien_externe_facebook']): ?>
                    <a href="<?php echo $medias_sociaux['lien_externe_facebook'] ?>" target="_blank">
                        <svg width="9" height="19" viewBox="0 0 9 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.98301 9.57479V18.7607C1.98301 18.8927 2.09244 19 2.22703 19H5.7054C5.83999 19 5.94904 18.8927 5.94904 18.7607V9.42521H8.47079C8.59737 9.42521 8.70299 9.32986 8.71366 9.20608L8.95615 6.39329C8.96835 6.25381 8.85626 6.13377 8.71328 6.13377H5.94904V4.13842C5.94904 3.67062 6.33565 3.29144 6.81262 3.29144H8.75598C8.89096 3.29144 9 3.18412 9 3.05212V0.239323C9 0.107321 8.89096 0 8.75598 0H5.47244C3.54548 0 1.98301 1.53204 1.98301 3.42194V6.13377H0.244016C0.109426 6.13377 0 6.24109 0 6.3731V9.18589C0 9.31826 0.109426 9.42521 0.244016 9.42521H1.98301V9.57479Z" fill="white"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if($medias_sociaux['lien_externe_linkedin']): ?>
                    <a href="<?php echo $medias_sociaux['lien_externe_linkedin'] ?>" target="_blank">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.06235 0C0.815646 0 0 0.806023 0 1.86502C0 2.90152 0.792 3.73083 2.01452 3.73083H2.03816C3.30933 3.73083 4.0997 2.90152 4.0997 1.86502C4.07551 0.806023 3.30933 0 2.06235 0ZM17 9.8088V16H13.3556V10.2237C13.3556 8.77337 12.8294 7.7829 11.5098 7.7829C10.5028 7.7829 9.90462 8.44972 9.64044 9.0954C9.54449 9.32615 9.51976 9.64658 9.51976 9.97022V15.9997H5.87504C5.87504 15.9997 5.92396 6.21663 5.87504 5.20395H9.52003V6.73381C9.51659 6.73946 9.51249 6.74505 9.50844 6.75058C9.50385 6.75685 9.49931 6.76303 9.49584 6.76915H9.52003V6.73381C10.0044 5.9998 10.8681 4.95044 12.8046 4.95044C15.2024 4.95044 17 6.49342 17 9.8088ZM3.85998 16H0.216618V5.20395H3.85998V16Z" fill="white"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="footer_form_wraper" id="contact">
    
            <?php echo do_shortcode('[contact-form-7 id="2372" title="Contact form French"]'); ?>

        </div>
    </div>

    <p class="copyright">© 2021 - Club Rotary Salaberry-de-Valleyfield - Une signature de Zel</p>
</footer>

<?php wp_footer(); ?>
</body>

</html>