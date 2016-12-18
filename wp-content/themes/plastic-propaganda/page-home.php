<?php get_header(); ?>

<div class="slider">
    <!-- The loop for the slider -->
    <?php
        // The Query
        $slider_query = new WP_Query( array (
                'post_type' => 'pp-slider',
        )
        );
        // The Loop
        if ( $slider_query->have_posts() ) {
            while ( $slider_query->have_posts() ) {
                $slider_query->the_post();
                echo '<div class="slider__slide" style="background-image:url(' . get_field('slider_image') . ')">';
                    echo '<div class="wrapper">';
                        echo '<div class="slider__slide__info">';
                            echo '<h2 class="slider__slide__info__title">' . get_the_title() . '</h2>';
                            echo '<h3 class="slider__slide__info__subtitle">' . get_field('slider_subtitle') . '</h3>';
                            echo '<a href='. get_field('slide_link') . '" class="slider__slide__info__button">View gallery</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        } else {
            // no posts found
        }
        wp_reset_postdata();
    ?>
</div>
<main class="main wrapper" role="main">
    <div class="main__content">
        <h1 class="main__content__title">
            <?php the_title(); ?>
        </h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article class="main__content__post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
                <br class="clear">
                <?php edit_post_link(); ?>
            </article>
        <?php endwhile; ?>
        <?php else: ?>
        <article>
            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </article>
        <?php endif; ?>

</main>
<?php get_footer(); ?>
