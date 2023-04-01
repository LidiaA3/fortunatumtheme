<!doctype html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="<?php the_field ( 'options_meta_color', 'option' ); ?>">

        <?php the_field ( 'options_scripts_head', 'option' ); ?>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class( 'sticky-footer' ); ?>>

        <!-- HEADER -->

        <div class="topbar">
            <a href="<?php echo home_url(); ?>" class="topbar__link"><img class="topbar__logo" src="<?php bloginfo ( 'template_url' ); ?>/imgs/logo.png" alt="Logotipo de Fortunatum"></a>

            <nav>
                <div class="nav-toggle" id="nav-toggle">
                    <div class="nav-toggle__active" id="menu-show">
                        <svg width="30" height="9" viewBox="0 0 30 9" fill="none">
                            <path d="M22.5 4.5C22.5 3.50544 22.8951 2.55161 23.5984 1.84835C24.3016 1.14509 25.2554 0.75 26.25 0.75C27.2446 0.75 28.1984 1.14509 28.9016 1.84835C29.6049 2.55161 30 3.50544 30 4.5C30 5.49456 29.6049 6.44839 28.9016 7.15165C28.1984 7.85491 27.2446 8.25 26.25 8.25C25.2554 8.25 24.3016 7.85491 23.5984 7.15165C22.8951 6.44839 22.5 5.49456 22.5 4.5ZM11.25 4.5C11.25 3.50544 11.6451 2.55161 12.3484 1.84835C13.0516 1.14509 14.0054 0.75 15 0.75C15.9946 0.75 16.9484 1.14509 17.6516 1.84835C18.3549 2.55161 18.75 3.50544 18.75 4.5C18.75 5.49456 18.3549 6.44839 17.6516 7.15165C16.9484 7.85491 15.9946 8.25 15 8.25C14.0054 8.25 13.0516 7.85491 12.3484 7.15165C11.6451 6.44839 11.25 5.49456 11.25 4.5ZM0 4.5C0 3.50544 0.395088 2.55161 1.09835 1.84835C1.80161 1.14509 2.75544 0.75 3.75 0.75C4.74456 0.75 5.69839 1.14509 6.40165 1.84835C7.10491 2.55161 7.5 3.50544 7.5 4.5C7.5 5.49456 7.10491 6.44839 6.40165 7.15165C5.69839 7.85491 4.74456 8.25 3.75 8.25C2.75544 8.25 1.80161 7.85491 1.09835 7.15165C0.395088 6.44839 0 5.49456 0 4.5Z" fill="#D3BBAD"/>
                        </svg>
                        <p class="nav-toggle__label"><?php _e ( 'menu', 'fortunatum' ); ?></p>
                    </div>
                    <div class="nav-toggle__disactive" id="menu-hidden">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M18.9929 3.02143C19.5491 2.4652 19.5491 1.56337 18.9929 1.00714V1.00714C18.4366 0.450913 17.5348 0.450913 16.9786 1.00714L10 7.98571L3.02143 1.00714C2.4652 0.450912 1.56337 0.450913 1.00714 1.00714V1.00714C0.450913 1.56337 0.450913 2.4652 1.00714 3.02143L7.98571 10L1.00714 16.9786C0.450912 17.5348 0.450913 18.4366 1.00714 18.9929V18.9929C1.56337 19.5491 2.4652 19.5491 3.02143 18.9929L10 12.0143L16.9786 18.9929C17.5348 19.5491 18.4366 19.5491 18.9929 18.9929V18.9929C19.5491 18.4366 19.5491 17.5348 18.9929 16.9786L12.0143 10L18.9929 3.02143Z" fill="#D3BBAD"/>
                        </svg>
                        <p class="nav-toggle__label"><?php _e ( 'close', 'fortunatum' ); ?></p>
                    </div>
                </div>

                <?php
                    
                    wp_nav_menu ( array
                    (
                        'theme_location' => 'header-menu',
                        'container' => false
                    ));
                        
                ?>
            </nav>
        </div>
        