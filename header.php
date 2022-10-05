<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="C:/MAMP/htdocs/chrisKicks/wp-content/themes/chrisKicks/assets/images/logo.jpg">

    <?php 
    wp_head();
    ?>
</head>

<body>

<?php
    wp_nav_menu(
      array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary'
      )
    );
?>

<header>
<h1 class="heading"><?php the_title(); ?></h1>
</header>