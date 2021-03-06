<?php
/* Template Name: About */

$contenu = get_field('contenu');
$accordeons = get_field('accordeons');
get_header(); ?>
    <div class="template_about_wrap">

        <?php template_section_hero(); ?>

        <div class="template_about_content content_wrap">
            <div class="first_section">
                <h2>
                    Mot du président
                </h2>

                <div class="first_section_content">
                    <div class="left">
                        <?php if($contenu['image']): ?>
                            <div class="image_holder">
                                <img src="<?php echo $contenu['image']['url'] ?>" alt="<?php echo $contenu['image']['alt'] ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <?php if($contenu['texte']): ?>
                            <?php echo $contenu['texte']; ?>
                        <?php endif; ?>

                        <?php if($contenu['nom'] || $contenu['titre']): ?>
                        <div class="author">
                            <?php if($contenu['nom']): ?>
                                <h3><?php echo $contenu['nom'] ?></h3>
                            <?php endif; ?>
                            <?php if($contenu['titre']): ?>
                                <p><?php echo $contenu['titre'] ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if($accordeons): ?>
                <div class="accordion">
                    <?php foreach ($accordeons as $singleAccordion): ?>
                        <div class="single_accordion">
                            <h2>
                                <?php echo $singleAccordion['titre'] ?>

                                <div class="opener">
                                    <span></span>
                                    <span></span>
                                </div>
                            </h2>

                            <div class="question_content">
                                <?php if($singleAccordion['contenu']['image']): ?>
                                    <div class="left">
                                            <div class="image_holder">
                                                <img src="<?php echo $singleAccordion['contenu']['image']['url'] ?>" alt="<?php echo $singleAccordion['contenu']['image']['alt'] ?>">
                                            </div>
                                        
                                        <?php if($singleAccordion['contenu']['description_de_limage']): ?>
                                            <div class="image_caption">
                                                <?php echo $singleAccordion['contenu']['description_de_limage'] ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="right<?php if($singleAccordion['contenu']['image']): ?> half<?php endif; ?>">
                                    <?php if($singleAccordion['contenu']['texte']): ?>
                                        <?php echo $singleAccordion['contenu']['texte'] ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer(); ?>