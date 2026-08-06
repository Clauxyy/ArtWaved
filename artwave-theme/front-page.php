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
		<img src="<?php echo esc_url( $img . '/hero.webp' ); ?>" alt="<?php esc_attr_e( 'Aranjament elegant pe malul Dunării pentru eveniment', 'artwave' ); ?>">
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
		<p class="aw-eyebrow"><?php esc_html_e( 'EXPERIENȚE PE CARE LE PUTEM CREA ÎMPREUNĂ', 'artwave' ); ?></p>
		<div class="aw-eyebrow-divider"></div>

		<div class="aw-cards">
			<!-- Team -->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/teambuilding.png' ); ?>" alt="<?php esc_attr_e( 'Conferință corporate', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Corporate & Team Building', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Evenimente corporate și team building-uri organizate impecabil în Tulcea și Delta Dunării.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="https://artwaved.ro/index.php/corporate/"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>
			<!--Conferinte-->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/corporate.png' ); ?>" alt="<?php esc_attr_e( 'Conferință corporate', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="1.5"/><path d="M6 15v-4"/><path d="M11 15V8"/><path d="M16 15V6"/><path d="M21 15v-3"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Conferințe', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Conferințe și evenimente business organizate cu atenție la detalii, profesionalism și soluții personalizate pentru fiecare companie.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="https://artwaved.ro/index.php/conferinte/"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>
        <!-- Educatie -->
			<article class="aw-card">
				<div class="aw-card-media">
					<img src="<?php echo esc_url( $img . '/tineri.jpg' ); ?>" alt="<?php esc_attr_e( 'Tabere', 'artwave' ); ?>">
					<span class="aw-card-badge">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 9L12 4L22 9L12 14L2 9Z"/>
  <path d="M6 11V15C6 16.7 8.7 18 12 18C15.3 18 18 16.7 18 15V11"/>
  <path d="M22 9V15"/>
  <path d="M22 15C22 15.8 21.6 16.4 21 17"/></svg>
					</span>
				</div>
				<div class="aw-card-body">
					<h3><?php esc_html_e( 'Tabere & Programe pentru Tineri', 'artwave' ); ?></h3>
					<p><?php esc_html_e( 'Susținem dezvoltarea tinerilor prin tabere, programe educaționale și experiențe interactive, organizate profesionist și adaptate fiecărei comunități sau organizații.', 'artwave' ); ?></p>
					<a class="aw-link-more" href="https://artwaved.ro/index.php/educatie/"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
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
					<a class="aw-link-more" href="https://artwaved.ro/index.php/retreat/"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
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
					<a class="aw-link-more" href="https://artwaved.ro/index.php/festival/"><?php esc_html_e( 'Află mai multe', 'artwave' ); ?> &rarr;</a>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- ============================ CONTACT ============================ -->
<section class="aw-contact" id="contact">
	<?php
	// Preia statusul din transient
	$status = get_transient( 'aw_contact_status' );
	$error_message = get_transient( 'aw_contact_error' );
	$success = get_transient( 'aw_contact_success' );

	if ( $status || $error_message || $success ) {
		// Șterge transientele după citire
		delete_transient( 'aw_contact_status' );
		delete_transient( 'aw_contact_error' );
		delete_transient( 'aw_contact_success' );
		
		$status_class = $success ? 'success' : 'error';
		?>
		<div class="aw-notice aw-notice-<?php echo esc_attr( $status_class ); ?>">
			<div class="aw-container">
				<?php if ( $success ) : ?>
					<p>✅ Cererea a fost trimisă cu succes! Vom reveni în cel mai scurt timp.</p>
				<?php else : ?>
					<p>❌ A apărut o eroare la trimitere. Te rugăm să încerci din nou.</p>
					<?php if ( $error_message ) : ?>
						<p><?php echo esc_html( $error_message ); ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php
	}
	?>

	<div class="aw-container">
		<form class="aw-form" action="#" method="post" novalidate>
			<?php wp_nonce_field( 'aw_contact_form', 'aw_contact_nonce' ); ?>
      <!-- Grid intern 2x2 -->
      <div class="aw-form-grid">

        <!-- ============================================
             Rândul 1, Coloana stângă – Info ArtWave
             ============================================ -->
        <div class="aw-grid-cell aw-contact-info">
          <div class="aw-eyebrow"><?php esc_html_e( 'Contact', 'artwave' ); ?></div>
          <h2><?php esc_html_e( 'Să începem planificarea', 'artwave' ); ?></h2>
          <p class="aw-contact-intro"><?php esc_html_e( 'Completează formularul și hai să transformăm evenimentul tău într-o experiență memorabilă în Tulcea și Delta Dunării.', 'artwave' ); ?></p>
          <ul class="aw-contact-list">
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 7L2 7"/></svg>
              <a href="mailto:artwave_d@yahoo.com">artwave_d@yahoo.com</a>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:+40748319391">+40 748 319 391</a>
            </li>
          </ul>
        </div>

        <!-- ============================================
             Rândul 1, Coloana dreaptă – Date persoană
             ============================================ -->
        <div class="aw-grid-cell">
          <fieldset class="aw-fieldset">
            <legend><?php esc_html_e( 'Date de contact', 'artwave' ); ?></legend>
            <div class="aw-form-row">
              <div class="aw-form-col">
                <label for="aw_name"><?php esc_html_e( 'Nume și prenume', 'artwave' ); ?> <span class="aw-required">*</span></label>
                <input type="text" id="aw_name" name="aw_name" placeholder="<?php esc_attr_e( 'Ex: Ion Popescu', 'artwave' ); ?>" required>
              </div>
              <div class="aw-form-col">
                <label for="aw_company"><?php esc_html_e( 'Companie / Organizație', 'artwave' ); ?></label>
                <input type="text" id="aw_company" name="aw_company" placeholder="<?php esc_attr_e( 'Numele companiei', 'artwave' ); ?>">
              </div>
            </div>

            <div class="aw-form-row">
              <div class="aw-form-col">
                <label for="aw_position"><?php esc_html_e( 'Funcția', 'artwave' ); ?></label>
                <input type="text" id="aw_position" name="aw_position" placeholder="<?php esc_attr_e( 'Ex: Manager Evenimente', 'artwave' ); ?>">
              </div>
              <div class="aw-form-col">
                <label for="aw_phone"><?php esc_html_e( 'Telefon', 'artwave' ); ?> <span class="aw-required">*</span></label>
                <input type="tel" id="aw_phone" name="aw_phone" placeholder="<?php esc_attr_e( 'Ex: 0741 234 567', 'artwave' ); ?>" required>
              </div>
            </div>

            <div class="aw-form-row">
              <div class="aw-form-col aw-form-col-full">
                <label for="aw_email"><?php esc_html_e( 'E-mail', 'artwave' ); ?> <span class="aw-required">*</span></label>
                <input type="email" id="aw_email" name="aw_email" placeholder="<?php esc_attr_e( 'exemplu@domeniu.ro', 'artwave' ); ?>" required>
              </div>
            </div>
          </fieldset>
        </div>

        <!-- ============================================
             Rândul 2, Coloana stângă – Detalii eveniment
             ============================================ -->
        <div class="aw-grid-cell">

          <!-- Tip eveniment -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Ce tip de eveniment doriți să organizați?', 'artwave' ); ?></p>
            <div class="aw-checkbox-grid">
              <label><input type="checkbox" name="aw_event_type[]" value="conferinta"> <?php esc_html_e( 'Conferință', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="workshop"> <?php esc_html_e( 'Workshop', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="team_building"> <?php esc_html_e( 'Team Building', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="retreat"> <?php esc_html_e( 'Retreat', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="corporate"> <?php esc_html_e( 'Eveniment Corporate', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="management"> <?php esc_html_e( 'Întâlnire de management', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_event_type[]" value="lansare"> <?php esc_html_e( 'Lansare produs', 'artwave' ); ?></label>
              <div class="aw-checkbox-option">
                <label>
                  <input type="checkbox" name="aw_event_type[]" value="altul" class="aw-toggle-conditional">
                  <?php esc_html_e( 'Altul', 'artwave' ); ?>
                </label>
                <input type="text" name="aw_event_type_other" placeholder="<?php esc_attr_e( 'Specificați', 'artwave' ); ?>" class="aw-input-inline aw-input-conditional">
              </div>
            </div>
          </div>

          <!-- Obiectiv -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Care este obiectivul principal al evenimentului?', 'artwave' ); ?></p>
            <div class="aw-checkbox-grid">
              <label><input type="checkbox" name="aw_objective[]" value="educatie"> <?php esc_html_e( 'Educație', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_objective[]" value="networking"> <?php esc_html_e( 'Networking', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_objective[]" value="motivare"> <?php esc_html_e( 'Motivarea echipei', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_objective[]" value="relaxare"> <?php esc_html_e( 'Relaxare', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_objective[]" value="consolidare"> <?php esc_html_e( 'Consolidarea echipei', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_objective[]" value="lansare"> <?php esc_html_e( 'Lansare', 'artwave' ); ?></label>
              <div class="aw-checkbox-option">
                <label>
                  <input type="checkbox" name="aw_objective[]" value="altul" class="aw-toggle-conditional">
                  <?php esc_html_e( 'Altul', 'artwave' ); ?>
                </label>
                <input type="text" name="aw_objective_other" placeholder="<?php esc_attr_e( 'Specificați', 'artwave' ); ?>" class="aw-input-inline aw-input-conditional">
              </div>
            </div>
          </div>

          <!-- Perioadă -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'În ce perioadă doriți organizarea?', 'artwave' ); ?></p>
            <input type="date" name="aw_date" class="aw-date-input">
          </div>

          <!-- Durată -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Durata', 'artwave' ); ?></p>
            <div class="aw-radio-group">
              <label><input type="radio" name="aw_duration" value="1_zi"> <?php esc_html_e( 'O zi', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_duration" value="2_zile"> <?php esc_html_e( 'Două zile', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_duration" value="3_zile"> <?php esc_html_e( 'Trei zile', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_duration" value="peste_3"> <?php esc_html_e( 'Peste trei zile', 'artwave' ); ?></label>
            </div>
          </div>

          <!-- Număr participanți -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Număr estimativ de participanți', 'artwave' ); ?></p>
            <div class="aw-radio-group">
              <label><input type="radio" name="aw_participants" value="pana_la_20"> <?php esc_html_e( 'până la 20', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_participants" value="20_50"> <?php esc_html_e( '20–50', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_participants" value="50_100"> <?php esc_html_e( '50–100', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_participants" value="100_200"> <?php esc_html_e( '100–200', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_participants" value="peste_200"> <?php esc_html_e( 'peste 200', 'artwave' ); ?></label>
            </div>
          </div>

        </div>

        <!-- ============================================
             Rândul 2, Coloana dreaptă – Servicii, etc.
             ============================================ -->
        <div class="aw-grid-cell">

          <!-- Servicii interesate -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Ce servicii vă interesează?', 'artwave' ); ?></p>
            <div class="aw-checkbox-grid aw-services-grid">
              <label><input type="checkbox" name="aw_services[]" value="cazare"> <?php esc_html_e( 'Cazare', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="sala_conferinta"> <?php esc_html_e( 'Sală de conferință', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="coffee_break"> <?php esc_html_e( 'Coffee Break', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="mic_dejun"> <?php esc_html_e( 'Mic dejun', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="pranz"> <?php esc_html_e( 'Prânz', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="cina" cheed> <?php esc_html_e( 'Cină', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="cina_festiva"> <?php esc_html_e( 'Cină festivă', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="transport"> <?php esc_html_e( 'Transport', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="transfer"> <?php esc_html_e( 'Transfer aeroport / gară', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="excursii"> <?php esc_html_e( 'Excursii în Delta Dunării', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="team_building"> <?php esc_html_e( 'Team Building', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="activitati"> <?php esc_html_e( 'Activități recreative', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="logistica"> <?php esc_html_e( 'Logistică completă', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_services[]" value="coordonare"> <?php esc_html_e( 'Coordonare în timpul evenimentului', 'artwave' ); ?></label>
              <div class="aw-checkbox-option">
                <label>
                  <input type="checkbox" name="aw_services[]" value="altceva" class="aw-toggle-conditional">
                  <?php esc_html_e( 'Altceva', 'artwave' ); ?>
                </label>
                <input type="text" name="aw_services_other" placeholder="<?php esc_attr_e( 'Specificați', 'artwave' ); ?>" class="aw-input-inline aw-input-conditional">
              </div>
            </div>
          </div>

          <!-- Experiență dorită -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Cum v-ați dori să fie experiența?', 'artwave' ); ?></p>
            <div class="aw-radio-group">
              <label><input type="radio" name="aw_experience" value="premium"> <?php esc_html_e( 'Premium', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_experience" value="echilibrata"> <?php esc_html_e( 'Echilibrată', 'artwave' ); ?></label>
              <label><input type="radio" name="aw_experience" value="eficienta_cost"> <?php esc_html_e( 'Cea mai eficientă din punct de vedere al costurilor', 'artwave' ); ?></label>
            </div>
          </div>

          <!-- Priorități -->
          <div class="aw-form-group">
            <p class="aw-label"><?php esc_html_e( 'Ce este cel mai important pentru dumneavoastră?', 'artwave' ); ?></p>
            <div class="aw-checkbox-grid">
              <label><input type="checkbox" name="aw_priorities[]" value="locatia"> <?php esc_html_e( 'Locația', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="sala"> <?php esc_html_e( 'Sala de conferință', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="cazarea"> <?php esc_html_e( 'Cazarea', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="mancarea"> <?php esc_html_e( 'Mâncarea', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="experientele"> <?php esc_html_e( 'Experiențele', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="bugetul"> <?php esc_html_e( 'Bugetul', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="relaxarea"> <?php esc_html_e( 'Relaxarea', 'artwave' ); ?></label>
              <label><input type="checkbox" name="aw_priorities[]" value="networking_ul"> <?php esc_html_e( 'Networking-ul', 'artwave' ); ?></label>
              <div class="aw-checkbox-option">
                <label>
                  <input type="checkbox" name="aw_priorities[]" value="altceva" class="aw-toggle-conditional">
                  <?php esc_html_e( 'Altceva', 'artwave' ); ?>
                </label>
                <input type="text" name="aw_priorities_other" placeholder="<?php esc_attr_e( 'Specificați', 'artwave' ); ?>" class="aw-input-inline aw-input-conditional">
              </div>
            </div>
          </div>

          <!-- Descriere eveniment -->
          <div class="aw-form-group">
            <label for="aw_message" class="aw-label"><?php esc_html_e( 'Povestiți-ne pe scurt despre eveniment', 'artwave' ); ?></label>
            <p class="aw-help-text"><?php esc_html_e( 'Orice informație ne ajută să vă pregătim o propunere cât mai potrivită.', 'artwave' ); ?></p>
            <textarea id="aw_message" name="aw_message" rows="5" placeholder="<?php esc_attr_e( 'Detalii despre eveniment, preferințe, cerințe speciale...', 'artwave' ); ?>"></textarea>
          </div>
        </div>
		<!-- După cele 4 celule existente -->
<div class="aw-grid-cell aw-btn-cell">
					<button type="submit" class="aw-btn"><?php esc_html_e( 'Trimite cererea', 'artwave' ); ?></button>
				</div>
			</div><!-- /aw-form-grid -->
		</form>
	</div>
</section>

<?php
get_footer();
