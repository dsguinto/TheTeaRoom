<?php
/**
 The template for displaying 404 pages (Not Found)/*
 **/
?>

<?php get_header(); ?>

<style>
    body{
        background-color: rgb(248, 248, 248);
    }
    .container{
        background: none;
    }
    .row{
        display:flex;
        justify-content: center;
    }
    .row h2{
        margin: 2em 0 0 0;
    }
</style>
<main>
    <div class="container">
        <h1>404 Error: <br>Page Not Found</h1>
        <div class="row">
            <h2>This page doesn't seem to exist...Sorry!</h2>
        </div>
        <div class="row">
        <img src="<?php echo get_template_directory_uri().'/images/404-img.jpg'; ?>">
        </div>
	</div>
</main>

<?php get_footer(); ?>