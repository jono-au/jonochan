<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jono</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">

    <nav id="site-navigation" class="main-navigation nav-scroll" role="navigation">
          <!--add site logo -->
    <div class="site-branding">
        <p class="site-title">
            <a href="<?php echo esc_url( home_url('/')); ?>" rel="home">&#60;<span style="color:#ffd79c">JONO</span>&#62;<span style="color:#aef1ff">WebDeveloper</span></a>
        </p>
    </div>

<a href="#!" class="nav-ico"><img src="/wp-content/themes/jono/assets/img/menu-icon.png"></a>
<div class="main-nav">
        <?php
            $args = [
                'theme_location' => 'main-menu'
            ];
            wp_nav_menu( $args );
        ?>
</div>
    </nav>
    
</header>