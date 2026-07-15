<?php
/**
 * Site footer.
 *
 * @package ArtWave
 */

?>

<footer class="aw-footer">
	<div class="aw-container">
		<div class="aw-footer-inner">
			<a class="aw-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
					<path d="M2 17c2.5 0 2.5-4 5-4s2.5 4 5 4 2.5-4 5-4 2.5 4 5 4"></path>
					<path d="M2 12c2.5 0 2.5-4 5-4s2.5 4 5 4 2.5-4 5-4 2.5 4 5 4"></path>
				</svg>
				<span><?php echo esc_html( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'ARTWAVE' ); ?></span>
			</a>

			<nav class="aw-footer-nav" aria-label="<?php esc_attr_e( 'Footer', 'artwave' ); ?>">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => '',
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
				} else {
					?>
					<ul>
						<li><a href="#home"><?php esc_html_e( 'Home', 'artwave' ); ?></a></li>
						<li><a href="#servicii"><?php esc_html_e( 'Servicii', 'artwave' ); ?></a></li>
						<li><a href="#despre"><?php esc_html_e( 'Despre', 'artwave' ); ?></a></li>
						<li><a href="#portofoliu"><?php esc_html_e( 'Portofoliu', 'artwave' ); ?></a></li>
						<li><a href="#contact"><?php esc_html_e( 'Contact', 'artwave' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</nav>

			<div class="aw-social">
				<a href="#" aria-label="Facebook">
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.25-1.5 1.55-1.5H17V4.6c-.29-.04-1.3-.12-2.46-.12-2.43 0-4.09 1.48-4.09 4.21v2.35H7.7V14h2.75v8z"/></svg>
				</a>
				<a href="#" aria-label="Instagram">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
				</a>
				<a href="#" aria-label="LinkedIn">
					<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.94 5a1.94 1.94 0 1 1-3.88 0 1.94 1.94 0 0 1 3.88 0zM3.4 8.4h3.1V21H3.4zM9.3 8.4h2.97v1.72h.04c.41-.78 1.42-1.6 2.93-1.6 3.13 0 3.71 2.06 3.71 4.74V21h-3.1v-5.6c0-1.33-.02-3.05-1.86-3.05-1.86 0-2.14 1.45-2.14 2.95V21H9.3z"/></svg>
				</a>
			</div>
		</div>

		<p class="aw-copyright">
			<?php
			printf(
				/* translators: %1$s: year, %2$s: company name */
				esc_html__( '© %1$s %2$s. Toate drepturile rezervate.', 'artwave' ),
				esc_html( gmdate( 'Y' ) ),
				'ArtWave-D SRL'
			);
			?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
