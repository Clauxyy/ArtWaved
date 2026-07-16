<?php
/**
 * Front page template.
 *
 * @package ArtWave
 */

get_header();

$img = get_template_directory_uri() . '/assets/images';
?>

<!-- ============================ HERO ============================ -->
<section class="aw-hero">
	<div class="aw-hero-bg">
		<img src="<?php echo esc_url( $img . '/hero.webp' ); ?>" alt="<?php esc_attr_e( 'Aranjament elegant de masă pentru eveniment', 'artwave' ); ?>">
	</div>
	<div class="aw-container aw-hero-inner">
		<h1>
			<?php esc_html_e( 'Partenerul tău local pentru evenimente în', 'artwave' ); ?>
			<span class="aw-accent"><?php esc_html_e( 'Tulcea și Delta Dunării', 'artwave' ); ?></span>
		</h1>
		<p><?php esc_html_e( 'Coordonăm local cazarea, transferurile, locațiile și logistica, astfel încât tu să te concentrezi pe participanți.', 'artwave' ); ?></p>
		<a class="aw-btn" href="#contact"><?php esc_html_e( 'Solicită o ofertă', 'artwave' ); ?></a>
	</div>
</section>

<!-- ============================ FEATURES ============================ -->
<section class="aw-section" id="servicii">
	<div class="aw-container">
		<p class="aw-eyebrow"><?php esc_html_e( 'Tot ce ai nevoie pentru un eveniment de succes', 'artwave' ); ?></p>
		<div class="aw-eyebrow-divider"></div>

		<div class="aw-features">
			<div class="aw-feature">
				<div class="aw-feature-icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 17v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4"/><path d="M2 17v3M22 17v3"/><path d="M4 11V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3"/><path d="M8 8v3M16 8v3"/></svg>
				</div>
				<h3><?php esc_html_e( 'Cazare', 'artwave' ); ?></h3>
				<p><?php esc_html_e( 'Rezervăm hoteluri, pensiuni și resorturi potrivite nevoilor tale.', 'artwave' ); ?></p>
			</div>

			<div class="aw-feature">
				<div class="aw-feature-icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 8h11v8H2z"/><path d="M13 10h4l3 3v3h-7z"/><circle cx="6" cy="17" r="1.6"/><circle cx="17" cy="17" r="1.6"/></svg>
				</div>
				<h3><?php esc_html_e( 'Transferuri', 'artwave' ); ?></h3>
				<p><?php esc_html_e( 'Transport rutier și naval sigur și confortabil pentru participanți.', 'artwave' ); ?></p>
			</div>

			<div class="aw-feature">
				<div class="aw-feature-icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 21s7-6.5 7-11a7 7 0 0 0-14 0c0 4.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
				</div>
				<h3><?php esc_html_e( 'Locații', 'artwave' ); ?></h3>
				<p><?php esc_html_e( 'Identificăm spațiul perfect, adaptat tipului tău de eveniment.', 'artwave' ); ?></p>
			</div>

			<div class="aw-feature">
				<div class="aw-feature-icon">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1"/><path d="M9 10h6M9 14h6"/></svg>
				</div>
				<h3><?php esc_html_e( 'Coordonare locală', 'artwave' ); ?></h3>
				<p><?php esc_html_e( 'Gestionăm furnizorii și logistica la fața locului, pas cu pas.', 'artwave' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- ============================ EVENT TYPES ============================ -->
<section class="aw-section" id="portofoliu" style="padding-top:0;">
	<div class="aw-container">
		<p class="aw-eyebrow"><?php esc_html_e( 'Tipuri de evenimente coordonate', 'artwave' ); ?></p>
		<div class="aw-eyebrow-divider"></div>

		<div class="aw-cards">
			<!-- Corporate -->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/corporate.png' ); ?>" alt="<?php esc_attr_e( 'Conferință corporate', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Corporate & Team Building', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Conferințe, întâlniri de business și team building-uri organizate impecabil în Tulcea și Delta Dunării.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="#contact"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>

			<!-- Retreat -->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/retreat.png' ); ?>" alt="<?php esc_attr_e( 'Retreat de wellness lângă lac', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M11 20A7 7 0 0 1 4 13c0-5 5-9 5-9s2 2.5 2 6"/><path d="M20 4s1 8-5 11c-2 1-4 1-4 1"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Retreat-uri', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Retreat-uri de wellness, dezvoltare personală sau corporate, în locații unice, în mijlocul naturii.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="#contact"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>

			<!-- Festival -->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/festival.png' ); ?>" alt="<?php esc_attr_e( 'Festival de muzică', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M9 18V5l10-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="16" cy="16" r="3"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Festivaluri & Evenimente Speciale', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Suport local pentru festivaluri, evenimente tematice, lansări și proiecte speciale în Tulcea și Delta Dunării.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="#contact"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- ============================ CONTACT ============================ -->
<section class="aw-contact" id="contact">
	<div class="aw-container">
		<div class="aw-contact-grid">
			<div>
				<p class="aw-eyebrow" style="text-align:left;letter-spacing:.22em;"><?php esc_html_e( 'Contact', 'artwave' ); ?></p>
				<h2><?php esc_html_e( 'Hai să povestim despre evenimentul tău!', 'artwave' ); ?></h2>
				<p class="aw-contact-intro"><?php esc_html_e( 'Ne poți scrie folosind formularul alăturat sau ne poți contacta direct.', 'artwave' ); ?></p>

				<ul class="aw-contact-list">
					<li>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.1-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z"/></svg>
						<span>+40 712 345 678</span>
					</li>
					<li>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m3 6 9 7 9-7"/></svg>
						<span>hello@artwave-d.ro</span>
					</li>
					<li>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M12 21s7-6.5 7-11a7 7 0 0 0-14 0c0 4.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
						<span>Tulcea, România</span>
					</li>
				</ul>
			</div>

			<form class="aw-form" action="#" method="post" novalidate>
				<input type="text" name="aw_name" placeholder="<?php esc_attr_e( 'Nume', 'artwave' ); ?>" required>
				<input type="email" name="aw_email" placeholder="<?php esc_attr_e( 'Email', 'artwave' ); ?>" required>
				<input type="tel" name="aw_phone" placeholder="<?php esc_attr_e( 'Telefon', 'artwave' ); ?>">
				<textarea name="aw_message" placeholder="<?php esc_attr_e( 'Mesajul tău', 'artwave' ); ?>" rows="5"></textarea>
				<button type="submit" class="aw-btn"><?php esc_html_e( 'Trimite mesajul', 'artwave' ); ?></button>
			</form>
		</div>
	</div>
</section>

<?php
get_footer();
