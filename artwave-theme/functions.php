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
/**
 * Procesează formularul de contact și trimite email
 */
function artwave_handle_contact_form() {
    // Verifică dacă formularul a fost trimis
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST' || ! isset( $_POST['aw_name'] ) ) {
        return;
    }

    // Verifică nonce pentru securitate
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

    // === FUNCȚIE DE FORMATARE ===
    function aw_format_label( $value, $type = '' ) {
        $labels = array(
            // Tip eveniment
            'conferinta'    => 'Conferință',
            'workshop'      => 'Workshop',
            'team_building' => 'Team Building',
            'retreat'       => 'Retreat',
            'corporate'     => 'Eveniment Corporate',
            'management'    => 'Întâlnire de management',
            'lansare'       => 'Lansare produs',
            'altul'         => 'Altul',
            // Obiectiv
            'educatie'      => 'Educație',
            'networking'    => 'Networking',
            'motivare'      => 'Motivarea echipei',
            'relaxare'      => 'Relaxare',
            'consolidare'   => 'Consolidarea echipei',
            'lansare'       => 'Lansare',
            // Servicii
            'cazare'                => 'Cazare',
            'sala_conferinta'       => 'Sală de conferință',
            'coffee_break'          => 'Coffee Break',
            'mic_dejun'             => 'Mic dejun',
            'pranz'                 => 'Prânz',
            'cina'                  => 'Cină',
            'cina_festiva'          => 'Cină festivă',
            'transport'             => 'Transport',
            'transfer'              => 'Transfer aeroport / gară',
            'excursii'              => 'Excursii în Delta Dunării',
            'activitati'            => 'Activități recreative',
            'logistica'             => 'Logistică completă',
            'coordonare'            => 'Coordonare în timpul evenimentului',
            'altceva'               => 'Altceva',
            // Priorități
            'locatia'               => 'Locația',
            'sala'                  => 'Sala de conferință',
            'cazarea'               => 'Cazarea',
            'mancarea'              => 'Mâncarea',
            'experientele'          => 'Experiențele',
            'bugetul'               => 'Bugetul',
            'relaxarea'             => 'Relaxarea',
            'networking_ul'         => 'Networking-ul',
            // Durată
            '1_zi'          => 'O zi',
            '2_zile'        => 'Două zile',
            '3_zile'        => 'Trei zile',
            'peste_3'       => 'Peste trei zile',
            // Participanți
            'pana_la_20'    => 'până la 20',
            '20_50'         => '20–50',
            '50_100'        => '50–100',
            '100_200'       => '100–200',
            'peste_200'     => 'peste 200',
            // Experiență
            'premium'       => 'Premium',
            'echilibrata'   => 'Echilibrată',
            'eficienta_cost'=> 'Cea mai eficientă din punct de vedere al costurilor',
        );

        // Dacă valoarea există în array, returnează eticheta, altfel returnează valoarea originală
        return isset( $labels[ $value ] ) ? $labels[ $value ] : $value;
    }

    // Formatează array-urile
    $event_type_formatted = array_map( 'aw_format_label', $event_type );
    $objective_formatted  = array_map( 'aw_format_label', $objective );
    $services_formatted   = array_map( 'aw_format_label', $services );
    $priorities_formatted = array_map( 'aw_format_label', $priorities );
    $duration_formatted   = aw_format_label( $duration );
    $participants_formatted = aw_format_label( $participants );
    $experience_formatted = aw_format_label( $experience );

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
    $body .= "Tip eveniment: " . ( ! empty( $event_type_formatted ) ? implode( ', ', $event_type_formatted ) : 'Neselectat' );
    if ( ! empty( $event_type_other ) ) {
        $body .= " (Altul: $event_type_other)";
    }
    $body .= "\n";

    $body .= "Obiectiv: " . ( ! empty( $objective_formatted ) ? implode( ', ', $objective_formatted ) : 'Neselectat' );
    if ( ! empty( $objective_other ) ) {
        $body .= " (Altul: $objective_other)";
    }
    $body .= "\n";

    $body .= "Perioadă: $date\n";
    $body .= "Durată: $duration_formatted\n";
    $body .= "Număr participanți: $participants_formatted\n\n";

    $body .= "--- SERVICII DORITE ---\n";
    $body .= ( ! empty( $services_formatted ) ? implode( ', ', $services_formatted ) : 'Neselectat' );
    if ( ! empty( $services_other ) ) {
        $body .= " (Altceva: $services_other)";
    }
    $body .= "\n\n";

    $body .= "Experiență dorită: $experience_formatted\n\n";

    $body .= "--- PRIORITĂȚI ---\n";
    $body .= ( ! empty( $priorities_formatted ) ? implode( ', ', $priorities_formatted ) : 'Neselectat' );
    if ( ! empty( $priorities_other ) ) {
        $body .= " (Altceva: $priorities_other)";
    }
    $body .= "\n\n";

    $body .= "--- MESAJ ---\n";
    $body .= ( ! empty( $message ) ? $message : 'Niciun mesaj suplimentar.' );

    // Destinatar - înlocuiește cu adresa ta de email
    $to = 'artwave_d@yahoo.com';

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