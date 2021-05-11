
<footer>
    <div class="footerMenu">
        <?php wp_nav_menu(
            array(
                'theme-location' => 'footer-menu',
                'menu_class' => 'footerNav'
            )
        )
        ?>
    </div>
    <p> &#169; Daniel Guinto, 2021. All Rights Reserved. </p>
</footer>

<?php wp_footer();?>
</body>
</html>