<?php
/*
 * Template Name: 予約ページ
 *
 * */
?>
<?php get_header(); ?>
<main class="page reservation">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="reservation__heading">
        <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>