<?php

/**
 * contents for short code pages go inside this page
 */

// 1. PHP AJAX LOGIC


add_action('wp_ajax_handle_contact_form_submission', 'process_contact_us_ajax');
add_action('wp_ajax_nopriv_handle_contact_form_submission', 'process_contact_us_ajax');

function process_contact_us_ajax() {

    $name    = sanitize_text_field($_POST['name']);
    $phone   = sanitize_text_field($_POST['phone']); 
    $email   = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    if (empty($name) || !is_email($email) || empty($message)) {
        wp_send_json_error("Invalid or incomplete fields.");
    }

    // 1. SET MULTIPLE RECIPIENTS IN AN ARRAY
    $to = array(
		$email,
        "leticiav@enzacta.net" // Replace with your Admin email
    ); 
    
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');
    
    $email_body = "Name: $name\r\n"
            . "Phone Number: $phone\r\n"
            . "Email: $email\r\n"
            . "Subject: $subject\r\n"
            . "Message: $message";

    // wp_mail accepts the array $to automatically
    $sent = wp_mail($to, "New message from ENZACTA México", $email_body, $headers);

    if ($sent) {
        wp_send_json_success("Email sent successfully.");
    } else {
        wp_send_json_error("The server could not send the email.");
    }
    wp_die(); 
}

// 2. ENQUEUE STYLES AND SCRIPTS
wp_enqueue_style( 'content-styles', plugins_url('assets/css/style.css', __FILE__));
wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array('jquery'), false, true); 

wp_localize_script('content-js','graphics_obj',array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
    'image_server_base_path'=>IMAGE_SERVER_BASE_PATH
));

/**
 * 3. HTML CONTENT
 * We wrap this in a check so it doesn't break the AJAX response.
 */
if ( !defined('DOING_AJAX') || !DOING_AJAX ) {
?>

<body>

	<h1 class="WP-contact-title WP-title-text margintop80">문의하기</h1>

	<div class="WP-contact-separator"></div>

	<div id="errorbox-contact-step" class="EJ-warning-field-container" style="display: none">
        <div class="EJ-warning-icon">
            <p class="EJ-form-fa-icon-warning"><i class="fas fa-exclamation-circle"></i></p>
        </div>
        <div class="EJ-warning-info">
            <div class="EJ-warning-info-txt">
                <p class="warning-info"><?php echo __( "Please fill out the highlighted fields:", 'ibo-join' );?></p>
            </div>
            <div id= "errorwarninglist" class="EJ-warning-list">
                <ul id="error-contact-ul" class="EJ-warning-missing-fields">
                </ul>                                                         
            </div>
        </div>
        <span class="cf"></span>
    </div>

	<div class="WP-contact-form-container margintop60" 
    data-shortcode="contact_us" 
    data-country="<?php echo trim(getmutistore(), '/'); ?>" 
    data-lang="<?php echo (isset($sitepress)) ? $sitepress->get_current_language() : 'es'; ?>">

		<h2 class="WP-contact-label WP-normal-text">이름(필수)</h2>
		<input class="WP-contact-input WP-normal-text" type="text" name="ibo_name" id="ibo_name">

		<h2 class="WP-contact-label WP-normal-text">연락처(필수)</h2>
		<input class="WP-contact-input WP-normal-text" type="text" name="phone" id="phone" onkeyup="RestrictToNumbers(this)" maxlength="10">

		<h2 class="WP-contact-label WP-normal-text">이메일(필수)</h2>
		<input class="WP-contact-input WP-normal-text" type="text" name="email" id="email">

		<h2 class="WP-contact-label WP-normal-text">제목(필수)</h2>
		<input class="WP-contact-input WP-normal-text" type="text" name="subject" id="subject">

		<h2 class="WP-contact-label WP-normal-text">문의내용(필수)</h2>
		<textarea class="WP-contact-textarea WP-normal-text" name="message" id="message"></textarea>

		<button class="WP-contact-button margintop20" onclick="ContactFormValidations()">보내기</button>
	</div>

	<div id="contact-response-banner" style="display:none; margin-top: 20px;">
		<div id="banner-message-box" class="elementor-message" role="alert">
			<span id="banner-text"></span>
		</div>
	</div>

	<h2 class="WP-contact-title WP-title-text margintop80">엔잭타 본사 및 비즈니스센타</h2>
	<div class="WP-contact-separator"></div>

	<div class="oficinas">

		<div class="WP-contact-address-container margintop60 tab-content activo" id="cdmx" data-city="cdmx">
			<!-- <button class="accordion-header">CDMX</button> -->
			<div class="accordion-body containerflexwrap">
				
				<div class="icons--flex">

					<div class="block03 icons__cards">
						<div class="WP-contact-address-icon-container">
							<img class="WP-contact-address-icon-img" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/4/2021/06/contacto-telefono1.jpg">
							<div class="WP-contact-address-text-container">
								<h2 class="WP-contact-address-title WP-tile-text">연락처</h2>
								<p class="WP-contact-address-text WP-normal-text">02-565-4011</p>
							</div>
						</div>
					</div>

					<div class="block03 icons__cards">
						<div class="WP-contact-address-icon-container">
							<img class="WP-contact-address-icon-img" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/4/2021/06/contacto-mail1.jpg">
							<div class="WP-contact-address-text-container">
								<h2 class="WP-contact-address-title WP-tile-text">이메일</h2>
								<p class="WP-contact-address-text WP-contact-address-text-break WP-normal-text">enzactakorea@enzacta.co.kr</p>
							</div>
						</div>
					</div>

					<div class="block03 icons__cards">
						<div class="WP-contact-address-icon-container icons__watch">
							<img class="WP-contact-address-icon-img" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/4/2021/06/contacto-horario1.jpg">
							<div class="WP-contact-address-text-container">
								<h2 class="WP-contact-address-title WP-tile-text">영업시간</h2>
								<p class="WP-contact-address-text WP-normal-text">월요일 ~ 금요일<br>10:00AM ~ 7:00PM</p>
							</div>
						</div>
					</div>

				</div>

				<div class="WP-contact-address-text-description-container">
					<p class="WP-contact-address-text-description WP-normal-text bc-address">
						서울특별시 강남구 역삼로25길 23, 5층 (역삼동, 대일테크빌딩) 06224
					</p>
					
					<div class="WP-map-container">
						<iframe
						loading="lazy"
						allowfullscreen
						referrerpolicy="no-referrer-when-downgrade"
						src="https://www.google.com/maps/embed/v1/place?key=<?php echo GOOGLE_API_KEY_KOREA; ?>&q=place_id:ChIJNQbAWVWhfDURt1itY8fCLXc&language=en">
						</iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<?php
} // END AJAX SHIELD
?>