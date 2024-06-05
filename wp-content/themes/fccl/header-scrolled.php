<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <a id='skip-nav' class='screenreader-text' href='#content'>
      Skip to Content
    </a>

    <header id="hdr-site" class="scrolled">
    <!-- HEADER TOP -->
    <div id="hdr-top">
        <div class="container">
            <div class="hdr-top-left">
              <?php if ( is_active_sidebar( 'header_content' ) ) : ?>
                  <?php dynamic_sidebar( 'header_content' ); ?>
              <?php endif; ?>
            </div>
            <div class="hdr-top-right hidden-sm">
              <?php
                  wp_nav_menu(array(
                    'theme_location'  => 'menu-utility',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'container'				=> '',
                    'container_id'		=> '',
                    'container_class' => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  ));
              ?>
            </div>
        </div>
    </div>

    <!-- LOGO AND MOBILE -->
    <div class="container">
        <div class="hdr-desktop">
        <div id="hdr-main">
            <a href="/" id="logo">
              <img src="<?php echo get_theme_file_uri() ?>/img/ivs-logo-white-text.png" alt="Family Crisis Centers Logo" />
            </a>
            <button id="menu-toggle" class="collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu">
                <div class="closed">
                    Menu
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="open">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </button>
        </div>

        <!-- MAIN NAVIGATION -->
        <nav id="menu" class="collapsed">
          <?php
              wp_nav_menu(array(
                'theme_location'  => 'menu-main',
                'menu_class'      => '',
                'menu_id'         => '',
                'container'				=> '',
                'container_id'		=> '',
                'container_class' => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb'     => false,
                'walker' => new Main_Nav_Walker()
              ));
          ?>
          <div class="hidden-lg">
            <?php
                wp_nav_menu(array(
                  'theme_location'  => 'menu-utility',
                  'menu_class'      => '',
                  'menu_id'         => '',
                  'container'				=> '',
                  'container_id'		=> '',
                  'container_class' => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
            ?>
          </div>
          <a href="https://familycrisiscenters.kindful.com/" target="_blank" class="btn-theme wp-block-button__link ">Donate Now</a>
        </nav>
        </div>
    </div>
  </header>
