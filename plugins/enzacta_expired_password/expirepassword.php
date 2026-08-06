<?php
 /**
 * Plugin Name: Enzacta Expired Password
 * Plugin URI: 
 * Description: The Plugin for Enzacta Expired Password 
 * Version: 1.0
 * Author: Aravind R
 * Author URI: 
 */
 

  require_once 'config.php';


  add_action('wp_footer', 'expire_password_enzacta_customization');


    function expirepasswordassetloader(){

                global $sitepress;
                    
                   // Safety check: is the variable set AND is the method available?
                    if (isset($sitepress) && method_exists($sitepress, 'get_current_language')) {
                        $current_language_code = $sitepress->get_current_language();
                    } else {
                        // Fallback behavior
                        $current_language_code = 'en'; // Or your default logic
                    }
                    $country = trim(getmutistore(), "/"); 
                    wp_enqueue_script('expire-password', plugins_url('assets\js\expirepassword.js', __FILE__));
                    wp_enqueue_script('jquery-ui-dialog');
                    wp_enqueue_style('wp-jquery-ui-dialog');
                    wp_enqueue_style('join-styles', plugins_url('assets/css/styles.css', __FILE__));
                    wp_localize_script('expire-password','expirepasswordservices_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
                     'nonce' => wp_create_nonce('expirepasswordservices_ajax-nonce'),
                     'plugin_url' => PLUGIN_EXPIRED_PASSWORD_URL,
                     'lang_pwd_not_match'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_NOT_MATCHING_929'),
                     'lang_pwd_format'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_929'),
                     'lang_pwd_cs_support'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_NOT_CUSTOMER_SUPPORT_929'),
                     'lang_pwd_value_not_matching'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_VALUE_NOT_MATCHING_929'),
                     'lang_pwd_text_1'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_FIRST_929'),
                     'lang_pwd_text_2'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_SECOND_929'),
                     'lang_pwd_text_3'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_THIRD_929'),
                     'lang_pwd_success'=>get_enzacta_custom_lang('ENZACTA_LANG_CLICK_MESSAGE_SUCCESS_929'),
                     'lang_pwd_format_error'=>get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_ERROR_929'),
                     'lang_pwd_fields_empty'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_FILL_FIELDS_929'),
                     'lang_pwd_expired_message'=>get_enzacta_custom_lang('ENZACTA_LANG_ERROR_PASSWORD_EXPIRED_MESSAGE_929'),
                     'domainsubsite'=>DOMAIN_SUB_SITE,
                     'country'=>$country,
                     'lang_code'=>$current_language_code
                    )); 
    }



function expire_password_enzacta_customization() { 

     if (!is_user_logged_in()) {
        expirepasswordassetloader();
    ?>

    <div class="EJ-mbox EJ-mbox-small korean-font expire__form--nopadd"  id="expire_password_form" style="display:none;overflow: auto;">
        <div class="EJ-mbox-close-space">
            <p class="EJ-mbox-close" id="cancel-box-circle"><i class="fas fa-times-circle"></i></p>
        </div>
        <div class="EJ-mbox-foreigners-space">
            <h4 class="EJ-mbox-sec-code-title"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_CHANGE_PASSWORD_929');?></h4>
            <h2 class="EJ-mbox-sec-code-title"><center><?php echo get_enzacta_custom_lang('ENZACTA_LANG_ERROR_PASSWORD_EXPIRED_MESSAGE_929');?></center></h2>
            
 <div id="errorbox-expirepassword-step" class="EJ-warning-field-container" style="display:none">
                              <div class="EJ-warning-icon">
                                  <p class="EJ-form-fa-icon-warning"><i class="fas fa-exclamation-circle"></i></p>
                              </div>
                              <div class="EJ-warning-info">
                                  <div class="EJ-warning-info-txt">
                                      <p class="warning-info"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_ERROR_MESSAGE_COMMON_929');?></p>
                                  </div>
                                  <div id= "errorwarninglist" class="EJ-warning-list">
                                      <ul id="error-personal-ul" class="EJ-warning-missing-fields">
                                      </ul>                                                          
                                  </div>
                              </div>
                          <span class="cf"></span>
    </div>

            <div class="EJ-mbox-foreigners-text">
              
            <table>
            <tr>
                <td><?php echo get_enzacta_custom_lang('ENZACTA_LANG_CURRENT_PASSWORD_929');?></td>
                <td width="165"><input type="password" class="EJ-form-field"   id="password_field" name="password_field" autocomplete="off">
               </td>
             </tr>
                 <tr>
                <td></td>
                <td width="165">
                <span class="EJ-form-field-note expire__text--left">(<?php echo get_enzacta_custom_lang('ENZACTA_LANG_EXPIRED_PASSWORD_FORMAT_929');?>)</span></td>
               </tr>
            <tr>
                <td><?php echo get_enzacta_custom_lang('ENZACTA_LANG_NEW_PASSWORD_929');?></td>
                <td width="165">
                <input type="password"  class="EJ-form-field" id="new_password_field" name="new_password_field" autocomplete="off">
                </td>
                 </tr> 
            <tr>
                <td><?php echo get_enzacta_custom_lang('ENZACTA_LANG_VERIFY_PASSWORD_929');?></td>
                <td width="165">
                <input type="password"  class="EJ-form-field" id="new_cpassword_field" name="new_cpassword_field" autocomplete="off">
                </td>
                 </tr>     
            </table>
            </div> 
            <div id="expire-password-service-loader"></div> 
            <!-- <div class="EJ-divisor-line"></div> -->
			<div id="save_btn_block">
				<a class="EJ-continue-button cursor-block" onclick="sendExpirePasswordInfo();">
					<p class="EJ-continue-button-text fit-to-parent"><?php echo get_enzacta_custom_lang('ENZACTA_LANG_SAVE_929');;?></p>
				</a>
			</div>
            <?php if(trim(getmutistore(), "/") == 'mx'){ ?>
            <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" title="Lost Password"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
            <?php } ?>
        </div>
    </div>
       <input type="hidden" name="expire_password_btn" id="expire_password_btn">
    <?php 
    }
} 

?>
