<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jono</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#menu-menu-1">
<header>
  <nav id="site-navigation" class="main-navigation nav-scroll" role="navigation">
                          <div id="navicon">
                          <input type="checkbox" id="menunav">
                            <label for="menunav" class="icon">
                                    <div class="menunav"></div>
                            </label></div>
                        </div>
    <div id="myNav" class="overlay">
      <div class="overlay-content">
        <div class="main-nav">
                <?php
                    $args = [
                        'theme_location' => 'main-menu',
                        'menu_class' => 'list-group'
                    ];
                    wp_nav_menu( $args );
                ?>
        </div>
      </div>
    </div>
  </nav>
    
</header>
