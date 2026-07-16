<?php
/**
 * Site header.
 *
 * @package ArtWave
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<header class="aw-header" id="home">
	<div class="aw-container aw-header-inner">
		<a class="aw-logo" href="">
			<img src="https://artwaved.ro/wp-content/uploads/2026/07/logo-3.png" alt="ArtWave - logo" class="aw-logo-img">
			<span>ARTWAVE</span>
		</a>

		<nav class="aw-nav" id="aw-nav" aria-label="<?php esc_attr_e( 'Primary', 'artwave' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_id'        => 'aw-primary-menu',
						'menu_class'     => '',
						'fallback_cb'    => 'artwave_default_menu',
					)
				);
			} else {
				artwave_default_menu();
			}
			?>
		</nav>

		<button class="aw-menu-toggle" id="aw-menu-toggle" aria-controls="aw-nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'artwave' ); ?>">
			<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
				<line x1="3" y1="7" x2="21" y2="7"></line>
				<line x1="3" y1="12" x2="21" y2="12"></line>
				<line x1="3" y1="17" x2="21" y2="17"></line>
			</svg>
		</button>
	</div>
</header>
