<?php /* Template name: Game */ ?>

<?php get_header(); the_post(); ?>

    <header>

        <h1 class="constrict-l"><?php the_title(); ?></h1>
        <div class="text-center"><?php the_post_thumbnail ( 'large' ); ?></div>

    </header>

    <main>

        <?php the_content(); ?>

    </main>

    <aside class="constrict-m">
        <?php dynamic_sidebar( 'game-sidebar' ); ?>
    </aside>

<?php get_footer(); ?>