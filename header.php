<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
    <?php wp_body_open() ?>
    <div id="wrapper" class="site">
        <header>
            <?php get_template_part( "template-parts/header/nav" ) ?>
        </header>
