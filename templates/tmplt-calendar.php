<?php
/* Template Name: Calendar */
$texte_introduction = get_field('texte_introduction');
get_header(); ?>
<div class="template_calendar_wrapper">
    <?php template_section_hero(); ?>
    
    <div class="template_calendar_content content_wrap">
        <?php if($texte_introduction): ?>
            <div class="page_hero_descripton">
                <?php echo $texte_introduction; ?>
            </div>
        <?php endif; ?>
        <?php echo do_shortcode('[MEC id="2539"]'); ?>
    </div>
</div>
<?php
get_footer(); ?>