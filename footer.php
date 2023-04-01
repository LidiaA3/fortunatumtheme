        <!-- FOOTER -->

        <footer class="footer">
            <div class="footer__section footer__contact">
                <img src="<?php bloginfo ( 'template_url' ); ?>/imgs/icono.png" alt="Icono de la marca">
                <p class="footer__tittle"><?php _e ( 'Contacto', 'fortunatum' ); ?></p>
                <p><a href="mailto:<?php bloginfo ( 'admin_email' ); ?>"><?php bloginfo ( 'admin_email' ); ?></a></p>
            </div>

            <div class="footer__section footer__menu-main">
                <?php
                        
                    wp_nav_menu ( array
                    (
                        'theme_location' => 'footer-menu-right',
                        'container' => false,
                        //'items_wrap' => '%3$s'
                    ));
                            
                ?>
            </div>

            <div class="footer__section footer__menu-secondary">
                <?php
                        
                    wp_nav_menu ( array
                    (
                        'theme_location' => 'footer-menu-left',
                        'container' => false,
                        //'items_wrap' => '%3$s'
                    ));
                            
                ?>
            </div>

            <div class="footer__section footer__copyright">
                <svg width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M4.848 6.03414C4.878 5.83614 4.944 5.66214 5.028 5.51814C5.208 5.18214 5.514 5.00814 5.928 5.00214C6.198 5.00214 6.444 5.12214 6.618 5.29614C6.786 5.48214 6.9 5.74014 6.9 5.99814H7.98C7.968 5.71614 7.914 5.45814 7.8 5.21814C7.71 4.99014 7.572 4.78614 7.392 4.61814C6.522 3.81414 4.908 3.92814 4.17 4.84014C3.396 5.84214 3.378 7.59414 4.164 8.59614C4.89 9.49014 6.48 9.61614 7.344 8.81814C7.53 8.66814 7.68 8.48214 7.8 8.26614C7.896 8.05014 7.962 7.82214 7.968 7.57614H6.9C6.9 7.70214 6.858 7.81614 6.804 7.91814C6.75 8.03214 6.678 8.12214 6.6 8.20014C6.402 8.35614 6.168 8.44014 5.916 8.44014C5.7 8.43414 5.52 8.39214 5.382 8.30214C5.232 8.21814 5.1 8.08014 5.028 7.91814C4.728 7.37814 4.776 6.62814 4.848 6.03414ZM6 0.71814C2.7 0.71814 0 3.41814 0 6.71814C0.318 14.6801 11.7 14.6741 12 6.71814C12 3.41814 9.3 0.71814 6 0.71814ZM6 11.5181C3.354 11.5181 1.2 9.36414 1.2 6.71814C1.464 0.35214 10.536 0.35214 10.8 6.71814C10.8 9.36414 8.646 11.5181 6 11.5181Z" fill="#F5F5F5"/>
                </svg>
                
                <?php

                    $myself = get_user_by ( 'email', get_bloginfo ( 'admin_email' ) );
                    echo $myself -> display_name;

                ?>

            </div>
        </footer>

        <?php the_field ( 'options_scripts_footer', 'option' ); ?>

        <?php wp_footer(); ?>

    </body>

</html>