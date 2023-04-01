<?php /* Template name: Characters */ ?>

<?php get_header(); the_post(); ?>

    <header class="constrict-l">
        
        <h1><?php the_title(); ?></h1>

    </header>

    <main>

        <!-- CHARACTERS -->

        <section class="card-section constrict-l">

            <?php $characters = new WP_Query ( array ( 'post_type' => 'personajes' ) ); ?>

            <?php while ( $characters -> have_posts() ) : $characters -> the_post(); ?>

                <article class="card">

                    <?php the_post_thumbnail ( 'post-thumbnail', ['class' => 'card__img border-img round-img'] ); ?>

                    <h2 class="h4"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                </article>

            <?php endwhile; wp_reset_postdata(); ?>

        </section>

        <?php the_content(); ?>

    </main>

    <aside class="constrict-m">
        <?php dynamic_sidebar( 'game-sidebar' ); ?>
    </aside>

<?php get_footer(); ?>