<!DOCTYPE html>
<html lang="en">
	<head>
		<?php wp_head(); ?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php wp_title(); ?></title>
    </head>
    
	<body <?php body_class();?>>
		<?php wp_body_open(); ?>
		<header>
            <a href="<?= get_site_url();?>" class="header-logo">
                <img src="<?= get_field('header_logo','options')['url'];?>" alt="<?= get_field('header_logo','options')['alt'];?>"/>
            </a>
            <div class="nav-btn open show">Menu</div>
            <div class="nav-btn close">Close</div>
        </header>
        <nav class="site-nav">
            <div class="block-wrapper">
                <a href="<?= get_site_url();?>" class="header-logo">
                    <img src="<?= get_field('header_logo','options')['url'];?>" alt="<?= get_field('header_logo','options')['alt'];?>"/>
                </a>
                <div class="nav-menu">
                    <div class="row">
                        <div class="col">
                            <?php wp_nav_menu( [
                                'theme_location' => 'main',
                                'menu_class'     => 'main',
                                'container'      => false,
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
