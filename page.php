<?php
/**
 * Template Name: Default Page
 * @package ArtWave
 */

get_header();
echo '<div style="background:#C8A96A;color:white;padding:30px;font-size:30px;text-align:center;">

</div>';
while ( have_posts() ) :
the_post();
?>

<main class="aw-page">

<?php if(has_post_thumbnail()) : ?>

<section class="aw-page-hero">

<?php the_post_thumbnail('full'); ?>

<div class="aw-page-overlay"></div>

<div class="aw-page-hero-content">

<span>ARTWAVE</span>

<h1><?php the_title(); ?></h1>

</div>

</section>

<?php else : ?>

<?php endif; ?>

<section class="aw-page-body">

<div class="aw-container">

<?php the_content(); ?>

</div>

</section>

</main>

<?php

endwhile;

get_footer();