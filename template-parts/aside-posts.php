<h3><?php the_field ( 'options_aside_news_tittle', 'option' ); ?></h3>

<section>

    <?php

        $news = new WP_Query ( array
        (
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => array (get_the_ID())
        ));

    ?>

    <?php while ( $news -> have_posts() ) : $news -> the_post(); ?>
        <article <?php post_class( 'aside-post' ); ?>>
        
            <p><a class="aside-post__tittle" href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
            <time class="aside-post__time" datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd M Y' ); ?></time>

        </article>

    <?php endwhile; wp_reset_postdata(); ?>

</section>

<div class="flex-section vertical-space">
    <a href="<?php echo home_url( ' /noticias/ ' ); ?>"><?php the_field ( 'options_aside_news_button_text', 'option' ); ?></a>
</div>
