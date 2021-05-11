<?php
/*
Template Name: Menu Template
*/
?>

<?php get_header();?>

<main>
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="row">
            <div class="column menu-images">
                <?php if( get_field('menu_image_1')): ?>
                    <img class="menu-image" src="<?php the_field('menu_image_1'); ?>" />
                <?php endif; ?>
                <?php if (get_field('menu_image_2')): ?>  
                    <img class="menu-image" src="<?php the_field('menu_image_2'); ?>" />
                <?php endif; ?>
                <?php if (get_field('menu_image_3')): ?>  
                    <img class="menu-image" src="<?php the_field('menu_image_3'); ?>" />
                <?php endif; ?>
                <?php if (get_field('menu_image_4')): ?>  
                    <img class="menu-image" src="<?php the_field('menu_image_4'); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="column menu-text">
                <div class="menu-text-section">
                <?php if( get_field('heading_1') &&  get_field('text_1')): ?>
                    <h2> <?php the_field('heading_1');?></h2>
                    <p><?php the_field('text_1');?></p>
                </div>
                <?php endif; ?>
                <?php if( get_field('heading_2') &&  get_field('text_2')): ?>
                <div class="menu-text-section">
                    <h2> <?php the_field('heading_2');?></h2>
                    <p><?php the_field('text_2');?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="column menu-text">
                <?php if( get_field('heading_3') &&  get_field('text_3')): ?>
                <div class="menu-text-section">
                    <h2> <?php the_field('heading_3');?></h2>
                    <p><?php the_field('text_3');?></p>
                </div>
                <?php endif; ?>
                <?php if( get_field('heading_4') &&  get_field('text_4')): ?>
                <div class="menu-text-section">
                    <h2> <?php the_field('heading_4');?></h2>
                    <p><?php the_field('text_4');?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>


<?php get_footer();?>