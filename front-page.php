<?php get_header();?>

<main>
    <div class="banner" style="background-image: url('<?php the_field("banner_image"); ?>');">
        <h2><?php get_template_part('includes/section','content');?></h2>
    </div>
    <div class="row">
        <div class="column">
        <?php if( get_field('image_1') ): ?>
            <img src="<?php the_field('image_1'); ?>" />
        <?php endif; ?>
        </div>
        <div class="column">
            <?php the_field('block_1');?>
            <p class="btnText"><a href="https://danielguinto.com/TheTeaRoom/about-us/" class="navBtn"><?php the_field('button_1');?></a><p>
        </div>
    </div>    
    <hr>  
    <div class="row">
        <div class="column">
            <?php the_field('block_2');?><br>
            <p class="btnText"><a href="https://danielguinto.com/TheTeaRoom/menu/" class="navBtn"><?php the_field('button_2');?></a><p>
        </div>
        <div class="column">
            <?php if( get_field('image_2') ): ?>
                <img src="<?php the_field('image_2'); ?>" />
            <?php endif; ?>
        </div>
    </div>
    <div class="row contact-us" style="background-image: url('<?php the_field("contact_image"); ?>');">
        <div class="middle-block">
            <h3><?php the_field('contact_block');?></h3>
            <p class="btnText"><a href="https://danielguinto.com/TheTeaRoom/contact-us/" class="navBtn"><?php the_field('contact_button');?></a></p>
        <div>
    </div>
</main>



<?php get_footer();?>