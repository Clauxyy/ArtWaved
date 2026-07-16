<?php
/**
 * Fallback template.
 *
 * WordPress uses front-page.php for the homepage. This file is required by
 * every theme and is used for any other view (blog, archives, 404, etc.).
 *
 * @package ArtWave
 */

get_header();
?>

<main class="aw-section">
	<div class="aw-container">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<article <?php post_class(); ?> style="margin-bottom:48px;">
					<h2 style="font-size:32px;margin-bottom:16px;">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<div style="color:var(--aw-muted);"><?php the_excerpt(); ?></div>
				</article>
				<?php
			}
			the_posts_pagination();
		} else {
			echo '<p style="color:var(--aw-muted);">' . esc_html__( 'Nu am găsit conținut.', 'artwave' ) . '</p>';
		}
		?>
	</div>
</main>

<?php
get_footer();
