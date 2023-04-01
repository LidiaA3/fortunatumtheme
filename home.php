<?php get_header(); ?>

    <header class="constrict-m">

        <h1><?php echo get_the_title ( get_option ( 'page_for_posts' ) ); ?></h1>

    </header>

    <main>

        <section class="constrict-m">

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="news">

                    <div class="news__header news__item">
                        <h2><?php the_title(); ?></h2>
                        <time class="news__date" datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd M Y' ); ?></time>
                    </div>

                    <div class="news__img">
                        <?php the_post_thumbnail ( 'large' ); ?>
                    </div>

                    <div class="news__content news__item">
                        <?php the_excerpt(); ?>
                        <div class="news__link">
                            <a href="<?php the_permalink(); ?>"><?php the_field ( 'options_news_button_text', 'option' ); ?></a>
                        </div>
                    </div>

                </article>

            <?php endwhile; wp_reset_postdata(); ?>

        </section>

        <aside class="flex-section constrict-m">
            <a href="<?php echo home_url(); ?>" class="btn"><?php the_field ( 'options_home_button_text', 'option' ); ?></a>
        </aside>

    </main>

<?php get_footer(); ?>