<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <meta charset="UTF-8">
    <title><?php wp_title('|', 1, right); ?> <?php bloginfo('name'); ?></title>

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

    <script>_url = "<?= URL ?>";</script>
</head>
<body>

<header class=lt-header><div class=wrap>
    <?php wp_nav_menu( array('container' => 'nav' )); ?>

    <nav class=menu>
        <ul>
            <li class=menu_item><a href=""><!-- <h1 class=logo>Plur</h1> --></a></li>
            <li class=menu_item><a href="">Home</a></li>
            <li class=menu_item><a href="">Work</a></li>
            <li class=menu_item><a href="">Contact</a></li>
        </ul>
    </nav>

    <?php get_search_form(); ?>
</div></header>