<?php
/*
Template Name: About Us Template
*/
?>

<?php get_header();?>

<main>
    <div class="container">
        <h1><?php the_title();?></h1>
        <div class="row">
            <div class="column">
                <?php get_template_part('includes/section','content');?>
            </div>
            <?php if( get_field('about_image') ): ?>
            <div class="column">
                <img class="about-image" src="<?php the_field('about_image'); ?>" />
            </div>
            <?php endif; ?>
        </div>
    </div>
</main>



<?php get_footer();?>