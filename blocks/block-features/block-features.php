<?php while ( have_rows ( 'feature' ) ) : the_row(); ?>

    <article class="feature">
        <img class="icon" src="<?php bloginfo ( 'template_url' ); ?>/imgs/icons/<?php echo the_sub_field ( 'feature_icon' ); ?>.svg" alt="Icono de característica">
        <p class="feature__text"><?php echo the_sub_field ( 'feature_text' ); ?></p>
    </article>

<?php endwhile; ?>