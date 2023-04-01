<?php get_header(); the_post(); ?>


    <header class="constrict-l">
        
        <h1><?php the_title(); ?></h1>
        <time class="news__date" datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd M Y' ); ?></time>
        
    </header>

    <main class="display-aside constrict-l">

        <section>
            
            <p class="text-bold"><?php echo  get_the_excerpt(); ?></p>
        
            <div class="flex-section">
                <?php the_post_thumbnail ( 'large', ['class' => 'text-center'] ); ?>
            </div>

            <?php the_content(); ?>

        </section>

        <aside class="vertical-space">

            <div>
                <?php get_template_part ( 'template-parts/aside-posts' ); ?>
            </div>

            <div class="flex-section">
                <a href="<?php echo home_url(); ?>" class="btn"><?php the_field ( 'options_home_button_text', 'option' ); ?></a>
            </div>

        </aside>

    </main>

<?php get_footer(); ?>