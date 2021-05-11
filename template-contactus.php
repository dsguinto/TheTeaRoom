<?php
/*
Template Name: Contact Us Template
*/
?>

<?php get_header();?>

<main>
    <div class="container">
        <h1><?php the_title();?></h1>
        <div>
            <?php get_template_part('includes/form', 'enquiry');?>
        </div>
    </div>
    <div class="row">

    <div class="row info-bar" style="background-image: url('<?php the_field("info_image"); ?>');">
        <div class="column">
            <h3>Our Address</h3>
            <div class="column-row">
                <p><?php the_field('street_address');?></p>
            </div>
            <div class="column-row">
                <p><?php the_field('city');?>, <?php the_field('province');?></p>
            </div>
            <div class="column-row">
                <p><?php the_field('postal_code');?></p>
            </div>
            <div class="column-row">
                <p><?php the_field('country');?></p>
            </div>
        </div>
        <div class="column">
            <h3>Our Hours</h3>
            <div class="hours">
                <p>Monday</p><p><?php the_field('monday');?></p> 
            </div>
            <div class="hours">    
                <p>Tuesday</p><p><?php the_field('tuesday');?></p> 
            </div>
            <div class="hours">        
                <p>Wednesday</p><p><?php the_field('wednesday');?></p> 
            </div>
            <div class="hours">        
                <p>Thursday</p><p><?php the_field('thursday');?></p> 
            </div>
            <div class="hours">       
                <p>Friday</p><p><?php the_field('friday');?></p> 
            </div>
            <div class="hours">        
                <p>Saturday</p><p><?php the_field('saturday');?></p> 
            </div>
            <div class="hours">        
                <p>Sunday</p><p><?php the_field('sunday');?></p> 
            </div>
        </div>
        <div class="column">
            <h3>Stay Connected</h3>
            <div class="column-row">
                <p>Phone: </p>
                <p> <?php the_field('phone');?></p>
            </div>
            <div class="column-row">
                <p>Email: </p>
                <p> <?php the_field('email');?></p>
            </div>
            <div class="column-row social-media">
                <?php if(get_field('facebook_url')): ?>
                    <a href="<?php the_field('facebook_url');?>" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                <?php endif;?>
                <?php if(get_field('twitter_url')): ?>
                    <a href="<?php the_field('twitter_url');?>" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
                <?php endif;?>
                <?php if(get_field('instagram_url')): ?>
                    <a href="<?php the_field('instagram_url');?>" target="_blank"><i class="fab fa-instagram-square fa-3x"></i></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</main>



<?php get_footer();?>