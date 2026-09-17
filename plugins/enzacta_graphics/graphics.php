<?php
/**
 * Plugin Name: Enzacta Graphics Tool
 * Plugin URI: 
 * Description: The Plugin is for managing Enzacta Graphic Contents on pages 
 * Version: 1.0
 * Author: Aravind R
 * Author URI: 
 */

require_once 'config.php';
require_once 'includes/helpers.php';

/**
 * Instruction: Use english short codes.
 * Don't repeat same short codes. Use one short code for same page on different languages.
 * Please create menu using admin site and add a page and add the short code for the page on the admin.
 */

// Sample short code for reference
add_shortcode('sample_code', 'loadGraphicsContent');

// --- MKT MX HOMEPAGE ---
add_shortcode('MX_homepage', 'loadGraphicsContent');

// --- MX Partner Products ---
add_shortcode('partner_products_test', 'loadGraphicsContent');
add_shortcode('KR-alfa_cafe_fusion',   'loadGraphicsContent');
add_shortcode('alfa_B12',              'loadGraphicsContent');
add_shortcode('alfa_dha',              'loadGraphicsContent');
add_shortcode('alfa_pxp_royale',       'loadGraphicsContent');
add_shortcode('our_history',           'loadGraphicsContent');
add_shortcode('alfa_rxp_con_resveratrol', 'loadGraphicsContent');
add_shortcode('MX_partner_products',   'loadGraphicsContent');

// --- MKT Products Pages ---
//alfa CAFE NUTRA Lite KR | KO/EN
add_shortcode('alfa_cafe_nutra_lite_blend_ko', 'loadGraphicsContent' );

// --- MKT Contact Us ---
add_shortcode('contact_us',            'loadGraphicsContent');

// --- MKT MX Aviso privacidad ---
add_shortcode('mx_aviso_privacidad',   'loadGraphicsContent');

// --- MKT MX UNDEW Series ---
add_shortcode('MX_UNDEW_suero_facial',    'loadGraphicsContent');
add_shortcode('MX_UNDEW_tonico_peptido',   'loadGraphicsContent');
add_shortcode('MX_UNDEW_Limpiador_Facial', 'loadGraphicsContent');

// --- MKT MX ALFA Series ---
add_shortcode('MX_alfa_energy',        'loadGraphicsContent');
add_shortcode('MX_alfa_yakunaah',      'loadGraphicsContent');
add_shortcode('MX_alfa_pxp_extreme',   'loadGraphicsContent');
add_shortcode('MX_ALFA_HFI',           'loadGraphicsContent');
add_shortcode('MX_alfa_pxp_forte',     'loadGraphicsContent');

// --- MKT Certificado ---
add_shortcode('Certificado_AMVD',      'loadGraphicsContent');

// --- MKT Entrepreneur ---
add_shortcode('entrepreneur',      'loadGraphicsContent');

// --- MKT KO Products Pages ---
// alfa_pxp_forte | KO/EN
add_shortcode('alfa-pxp-forte',      'loadGraphicsContent');
// alfa_zeta_probiotics | KO/EN
add_shortcode('ko_alfa_zeta_probiotics', 'loadGraphicsContent');
?>
