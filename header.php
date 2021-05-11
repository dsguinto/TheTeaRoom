<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Tea Room</title>
    <link rel="shortcut icon" href="http://danielguinto.com/TheTeaRoom/wp-content/themes/TheTeaRoom/images/bubble-tea.ico" />
    <?php wp_head();?>
</head>
<body>
<header>

    <div class="mainMenu">
        <div class="logo">
            <a href="https://danielguinto.com/TheTeaRoom/"><img class="logo-image" src="<?php echo(get_custom_header()->url) ?>"/> </a>           
        </div>
        <?php wp_nav_menu(
            array(
                'theme-location' => 'main-menu',
                'menu_class' => 'mainNav'
            )
        )
        ?>
    </div>

</header>
