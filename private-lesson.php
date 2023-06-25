<?php
	/*
	 * Template Name: プライベートレッスン
	 *
	 * */
?>

<?php get_header(); ?>
<main class="page private-lesson">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>