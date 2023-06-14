<?php get_header(); ?>
<main class="page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--    <h1>
        <?php /*the_title(); */?>
    </h1>-->

        <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>
    <style>
        @media screen and (min-width: 768px) {
            /* LP */
            html {
                font-size: 120%;
            }
        }

        @media screen and (min-width: 1024px) {
            /* LP */
            html {
                font-size: 140%;
            }
        }
    </style>
<?php get_footer(); ?>