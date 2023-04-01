<section class="review-section">

    <?php while ( have_rows ( 'user' ) ) : the_row(); ?>

        <article class="card">

            <?php echo wp_get_attachment_image ( get_sub_field ( 'user_img' ), '', '', array ( 'class' => 'card__img border-img round-img' ) ); ?>

            <h2 class="h4"><?php echo the_sub_field ( 'user_name' ); ?></h2>
            <p class="card__text"><?php echo the_sub_field ( 'user_review' ); ?></p>

        </article>

    <?php endwhile; ?>

</section>