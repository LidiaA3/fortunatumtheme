<?php get_header( 'clear' ); ?>

    <main>
        
        <h1 class="constrict-l flex-section flex-column text-center"><?php the_field ( '404_tittle', 'option' ); ?></h1>

        <div class="flex-section">
            <?php echo wp_get_attachment_image ( get_field ( '404_img', 'option' ), '', '', array ( 'class' => 'e404-img' ) ); ?>
        </div>

        <p class="constrict-m flex-section flex-column text-center"><?php the_field ( '404_content', 'option' ); ?></p>

        <div class="flex-section constrict-m">
            
            <div class="text-center">
                <a class="btn" href="<?php echo home_url(); ?>"><?php the_field ( 'options_home_button_text', 'option' ); ?></a>
            </div>

            <div class="text-center">
                <a class="btn btn--secondary" href="mailto:<?php bloginfo ( 'admin_email' ); ?>"><?php the_field ( 'options_contact_button_text', 'option' ); ?></a>
            </div>

        </div>

    </main>

<?php get_footer( 'clear' ); ?>