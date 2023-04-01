<?php /* Template name: Questions */ ?>

<?php get_header(); the_post(); ?>

    <header class="constrict-l">

        <h1><?php the_title(); ?></h1>

    </header>

    <main class="display-aside constrict-l">

        <!-- QUESTIONS -->

        <section>

            <?php $questions = new WP_Query ( array ( 'post_type' => 'preguntas' ) ); ?>

            <?php while ( $questions -> have_posts() ) : $questions -> the_post(); ?>

                <article class="question">

                    <div class="question__header">
                        <img src="<?php bloginfo ( 'template_url' ); ?>/imgs/bullet-icon.png" alt="Icono Fortunatum">
                        <h2 class="h4"><?php the_title(); ?></h2>
                    </div>

                    <?php the_content(); ?>

                </article>

            <?php endwhile; wp_reset_postdata(); ?>

        </section>

        
        <aside class="vertical-space">
            
            <div class="constrict-m">
                <?php get_template_part ( 'template-parts/aside-posts' ); ?>
            </div>
            
            <div class="flex-section">
                <a href="<?php echo home_url(); ?>" class="btn"><?php the_field ( 'options_home_button_text', 'option' ); ?></a>
            </div>
            
        </aside>
        
    </main>

<?php get_footer(); ?>