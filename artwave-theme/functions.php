<?php
/**
 * ArtWave theme functions.
 *
 * @package ArtWave
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'artwave_setup' ) ) {
	/**
	 * Basic theme setup.
	 */
	function artwave_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 40,
				'width'       => 160,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'artwave' ),
				'footer'  => __( 'Footer Menu', 'artwave' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'artwave_setup' );

/**
 * Enqueue styles and scripts.
 */
function artwave_assets() {
	// Google Fonts: Playfair Display (headings) + Jost (body).
	wp_enqueue_style(
		'artwave-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Jost:wght@300;400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'artwave-style',
		get_stylesheet_uri(),
		array( 'artwave-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'artwave-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'artwave_assets' );

/**
 * Fallback menu used when no menu is assigned to the "primary" location.
 */
function artwave_default_menu() {
	$items = array(
		'#servicii'    => __( 'Servicii', 'artwave' ),
		'#despre'      => __( 'Despre', 'artwave' ),
		'#portofoliu'  => __( 'Portofoliu', 'artwave' ),
		'#contact'     => __( 'Contact', 'artwave' ),
	);
	echo '<ul id="aw-primary-menu">';
	foreach ( $items as $url => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_attr( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

function artwave_enqueue_scripts() {
    // Încarcă scriptul custom.js
    wp_enqueue_script(
        'artwave-custom',                              // handle (nume unic)
        get_template_directory_uri() . '/js/custom.js', // calea către fișier
        array(),                                       // dependențe (dacă ai nevoie de jQuery, pui array('jquery'))
        '1.0.0',                                       // versiune
        true                                           // încarcă în footer (true) sau header (false)
    );
}
add_action('wp_enqueue_scripts', 'artwave_enqueue_scripts');

/**
 * Procesează formularul de contact și trimite email
 */
function artwave_handle_contact_form() {
    // Verifică dacă formularul a fost trimis
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST' || ! isset( $_POST['aw_name'] ) ) {
        return;
    }

    // Verifică nonce pentru securitate (opțional, dar recomandat)
    if ( ! isset( $_POST['aw_contact_nonce'] ) || ! wp_verify_nonce( $_POST['aw_contact_nonce'], 'aw_contact_form' ) ) {
        wp_die( 'Cerere invalidă.' );
    }

    // Sanitizează și validează câmpurile obligatorii
    $name    = sanitize_text_field( $_POST['aw_name'] ?? '' );
    $email   = sanitize_email( $_POST['aw_email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['aw_phone'] ?? '' );
    $company = sanitize_text_field( $_POST['aw_company'] ?? '' );
    $position = sanitize_text_field( $_POST['aw_position'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_die( 'Toate câmpurile obligatorii trebuie completate.' );
    }

    // Colectează datele formularului
    $event_type  = isset( $_POST['aw_event_type'] ) ? array_map( 'sanitize_text_field', (array) $_POST['aw_event_type'] ) : array();
    $objective   = isset( $_POST['aw_objective'] ) ? array_map( 'sanitize_text_field', (array) $_POST['aw_objective'] ) : array();
    $services    = isset( $_POST['aw_services'] ) ? array_map( 'sanitize_text_field', (array) $_POST['aw_services'] ) : array();
    $priorities  = isset( $_POST['aw_priorities'] ) ? array_map( 'sanitize_text_field', (array) $_POST['aw_priorities'] ) : array();

    $date        = sanitize_text_field( $_POST['aw_date'] ?? '' );
    $duration    = sanitize_text_field( $_POST['aw_duration'] ?? '' );
    $participants = sanitize_text_field( $_POST['aw_participants'] ?? '' );
    $experience  = sanitize_text_field( $_POST['aw_experience'] ?? '' );
    $message     = sanitize_textarea_field( $_POST['aw_message'] ?? '' );

    // Câmpuri "Altul" / "Altceva"
    $event_type_other   = sanitize_text_field( $_POST['aw_event_type_other'] ?? '' );
    $objective_other    = sanitize_text_field( $_POST['aw_objective_other'] ?? '' );
    $services_other     = sanitize_text_field( $_POST['aw_services_other'] ?? '' );
    $priorities_other   = sanitize_text_field( $_POST['aw_priorities_other'] ?? '' );

    // Construiește mesajul email
    $subject = 'Cerere eveniment - ArtWave';

    $body = "Nouă cerere primită de pe site-ul ArtWave.\n\n";
    $body .= "--- DATE DE CONTACT ---\n";
    $body .= "Nume: $name\n";
    $body .= "Companie: $company\n";
    $body .= "Funcție: $position\n";
    $body .= "Telefon: $phone\n";
    $body .= "Email: $email\n\n";

    $body .= "--- DETALII EVENIMENT ---\n";
    $body .= "Tip eveniment: " . ( ! empty( $event_type ) ? implode( ', ', $event_type ) : 'Neselectat' );
    if ( ! empty( $event_type_other ) ) {
        $body .= " (Altul: $event_type_other)";
    }
    $body .= "\n";

    $body .= "Obiectiv: " . ( ! empty( $objective ) ? implode( ', ', $objective ) : 'Neselectat' );
    if ( ! empty( $objective_other ) ) {
        $body .= " (Altul: $objective_other)";
    }
    $body .= "\n";

    $body .= "Perioadă: $date\n";
    $body .= "Durată: $duration\n";
    $body .= "Număr participanți: $participants\n\n";

    $body .= "--- SERVICII DORITE ---\n";
    $body .= ( ! empty( $services ) ? implode( ', ', $services ) : 'Neselectat' );
    if ( ! empty( $services_other ) ) {
        $body .= " (Altceva: $services_other)";
    }
    $body .= "\n\n";

    $body .= "Experiență dorită: $experience\n\n";

    $body .= "--- PRIORITĂȚI ---\n";
    $body .= ( ! empty( $priorities ) ? implode( ', ', $priorities ) : 'Neselectat' );
    if ( ! empty( $priorities_other ) ) {
        $body .= " (Altceva: $priorities_other)";
    }
    $body .= "\n\n";

    $body .= "--- MESAJ ---\n";
    $body .= ( ! empty( $message ) ? $message : 'Niciun mesaj suplimentar.' );

    // Destinatar - înlocuiește cu adresa ta de email
    $to = 'artwaved@artwaved.ro'; // <--- SCHIMBĂ AICI CU EMAILUL TĂU

    // Headere
    $headers = array( 'Content-Type: text/plain; charset=UTF-8' );

    // Trimite email
    $sent = wp_mail( $to, $subject, $body, $headers );

    // Redirecționează cu mesaj de succes/eroare
    if ( $sent ) {
        wp_redirect( add_query_arg( 'aw_status', 'success', wp_get_referer() ) . '#contact' );
    } else {
        wp_redirect( add_query_arg( 'aw_status', 'error', wp_get_referer() ) . '#contact' );
    }
    exit;
}
add_action( 'init', 'artwave_handle_contact_form' );
