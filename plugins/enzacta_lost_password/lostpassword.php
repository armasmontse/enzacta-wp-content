<?php
 /**
 * Plugin Name: Enzacta Lost Password
 * Plugin URI: 
 * Description: The Plugin for Enzacta Lost Password 
 * Version: 1.0
 * Author: Aravind R
 * Author URI: 
 */
 

  require_once 'config.php';


  add_action('wp_footer', 'lost_password_enzacta_customization');


    function lostpasswordassetloader(){

                global $sitepress;
                
                 //if ( is_account_page() || is_login_page() ) {
                    $current_language_code =  $sitepress->get_current_language();
                    $country = trim(getmutistore(), "/"); 
                     wp_enqueue_style('lost-password', plugins_url('assets\css\styles.css', __FILE__));
                    wp_enqueue_script('lost-password', plugins_url('assets\js\lostpassword.js', __FILE__));
                    wp_enqueue_script('jquery-ui-dialog');
                    wp_enqueue_style('wp-jquery-ui-dialog');
                    wp_enqueue_style('join-styles', plugins_url('assets/css/styles.css', __FILE__));
                    wp_localize_script('lost-password','lostpasswordservices_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
                     'nonce' => wp_create_nonce('lostpasswordservices_ajax-nonce'),
                     'plugin_url' => PLUGIN_LOST_PASSWORD_URL,
                     'lang_pwd_not_match'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_NOT_MATCHING_911'),
                     'lang_pwd_format'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_911'),
                     'lang_pwd_cs_support'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_NOT_CUSTOMER_SUPPORT_911'),
                     'lang_pwd_value_not_matching'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_VALUE_NOT_MATCHING_911'),
                     'lang_pwd_text_1'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_FIRST_911'),
                     'lang_pwd_text_2'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_SECOND_911'),
                     'lang_pwd_text_3'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_THIRD_911'),
                     'lang_pwd_success'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_SUCCESS_911'),
                     'lang_pwd_format_error'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_ERROR_911'),
                     'lang_pwd_fields_empty'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_FILL_FIELDS_911'),
                     'lang_pwd_fields_select'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_SELECT_ANY_FIELDS_911'),
                     'lang_pwd_expired_message'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_PASSWORD_EXPIRED_MESSAGE_911'),
                     'lang_pwd_new'=>get_enzacta_custom_lang('ENZACTA_LANG_NEW_PASSWORD_911'),
                     'lang_pwd_verify'=>get_enzacta_custom_lang('ENZACTA_LANG_VERIFY_PASSWORD_911'),
                     'lang_pwd_format'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_911'),
                     'lang_pwd_save'=>get_enzacta_custom_lang('ENZACTA_LANG_SAVE_911'),
                     'lang_pwd_6digit'=>get_enzacta_custom_lang('ENZACTA_LANG_6DIGIT_CODE_911'),
                     'lang_pwd_6digit_invalid'=>get_enzacta_custom_lang('ENZACTA_LANG_6DIGIT_CODE_INVALID_911'),
                     'lang_pwd_click_here'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_HERE_911'),
                     'lang_pwd_to_change_it'=>get_enzacta_custom_lang('ENZACTA_LANG_TO_CHANGE_IT_911'),
                     'lang_pwd_msg_common'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_COMMON_911'),
                     'lang_pwd_valid_email'=>get_enzacta_custom_lang('ENZACTA_LANG_VALID_EMAIL_911'),
                     'lang_pwd_valid_phone'=>get_enzacta_custom_lang('ENZACTA_LANG_VALID_PHONE_911'),
                     'lang_pwd_error_validating'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_VALIDATING_911'),
                     'domainsubsite'=>DOMAIN_SUB_SITE,
                     'country'=>$country,
                     'lang_code'=>$current_language_code
                    ));
                //} 
    }



function lost_password_enzacta_customization() { 

	if ((trim(getmutistore(), "/") == 'kr') && !is_user_logged_in()) {
        lostpasswordassetloader();

        //if ( is_account_page() || is_login_page() ) { 
    ?>

    <div class="EJ-mbox EJ-mbox-small korean-font"  id="lost_password_form" style="display:none;overflow: auto;">
        <div class="EJ-mbox-close-space">
            <p class="EJ-mbox-close" id="cancel-box-circle"><i class="fas fa-times-circle"></i></p>
        </div>
        <div class="EJ-mbox-foreigners-space">
            <h4 class="EJ-mbox-sec-code-title"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_WE_CAN_HELP_911');?></h4>
            <h2 class="EJ-mbox-sec-code-title"><center><?php echo get_enzacta_custom_lang('ENZACTA_LANG_WE_CAN_HELP_DESC_911');?></center></h2>
            
			<div id="errorbox-lostpassword-step" class="EJ-warning-field-container" style="display:none">
				<div class="EJ-warning-icon">
					<p class="EJ-form-fa-icon-warning"><i class="fas fa-exclamation-circle"></i></p>
				</div>
				<div class="EJ-warning-info">
					<div class="EJ-warning-info-txt">
						<p class="warning-info"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_COMMON_911');?></p>
					</div>
					<div id= "errorwarninglist" class="EJ-warning-list">
						<ul id="error-personal-ul1" class="EJ-warning-missing-fields">
						</ul>                                                          
					</div>
				</div>
				<span class="cf"></span>
			</div>

			<div class="EJ-mbox-foreigners-text">
				<div class="EJ-password-options">
					<input type="radio" id="opt_medium" name="opt_medium" value="email">
					<label class="po-mb-text po-mb-form-spacer" for="opt1"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_EMAIL_911');?></label></td>
					<input type="radio" id="opt_medium" name="opt_medium" value="phone">
					<label class="po-mb-text" for="opt2"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_PHONE_911'); ?></label></td>
				</div>

				<table>
					<tr id="email_container" style="display:none;">
						<td><?php echo get_enzacta_custom_lang('ENZACTA_LANG_EMAIL_911');?></td>
						<td width="165">
						<input type="text"  class="EJ-form-field" id="email" name="email"></td>
					</tr>

					<tr id="phone_container" style="display:none;">
						<td><?php echo get_enzacta_custom_lang('ENZACTA_LANG_PHONE_911');?></td>
						<td width="100">
						<input type="text"  class="EJ-form-field" id="phone" name="phone" maxlength="13"></td>
					</tr>
				</table>
			</div> 
            
			<div id="lost-password-service-loader"></div>
				<!-- <div class="EJ-divisor-line"></div> -->
				<div id="contact_info_response" style="text-align: center;"></div>
				<div id="save_btn_pwd_block">
				
					<a class="EJ-continue-button" onclick="validateIBOInformation();">
						<p class="EJ-continue-button-text"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_VALIDATE_911');?></p>
					</a>
				
			</div>
        </div>
    </div>
	<input type="hidden" name="lost_password_btn" id="lost_password_btn">
    <?php 
        // }
    }
} 

?>