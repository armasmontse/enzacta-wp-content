var lostpassword = [{ handler_id: "lost_password_btn", content_id: "lost_password_form" }];



	jQuery(document).ready(function() {
    jQuery('.woocommerce-LostPassword.lost_password, ul.woocommerce-error li.first-child a:not(.expire-a-link)').on('click', function(event) {
        // You can uncomment the following line to prevent the default behavior (i.e., prevent navigating to the lost password page immediately)
         event.preventDefault(); 

        // Add your custom JavaScript code here
        //alert('You clicked the lost password link!'); 
        // For example, you might open a modal, log the click, or perform other actions.
          jQuery('#lost_password_form').dialog({
            height: 'auto',width: 'auto'
            }).dialog("open");
            jQuery('#lost_password_form').dialog("widget").position({ my: "center", of: window, collision: "fit"});
    });
});


jQuery(function () {
	jQuery.each(lostpassword, function (i, object) {
		jQuery('#' + object.content_id).dialog({
		autoOpen: false, modal: true, title: '', width: 'auto', height: 'auto',
		open: function (event, ui) {
			jQuery(".ui-widget-overlay").click(function () {
				jQuery('#' + object.content_id).dialog('close');
			});
		},

		close: function (event, ui) {
			// Limpiar campos paso 1
			jQuery('#email').val('');
			jQuery('#phone').val('');
			jQuery('input[name="opt_medium"]').prop('checked', false);
			jQuery('#email_container').hide();
			jQuery('#phone_container').hide();

			// Limpiar errores paso 1
			jQuery('#errorbox-lostpassword-step').hide();
			jQuery('#error-personal-ul1').html('');

			// Limpiar respuestas dinámicas (código 6 dígitos / reset password form)
			jQuery('#contact_info_response').html('');
			jQuery('#lost-password-service-loader').html('');

			// Restaurar botón Validate
			jQuery('#save_btn_pwd_block').html(
				'<a class="EJ-continue-button" onclick="validateIBOInformation();">' +
				'<p class="EJ-continue-button-text">Validate</p>' +
				'</a>'
			);
		}

		});

		

		jQuery('#' + object.handler_id).bind("click", function (e) {
			e.preventDefault();
			// This does the popup
			jQuery('#' + object.content_id).dialog({
				height: 'auto', width: 'auto'
			}).dialog("open");
			jQuery('#' + object.content_id).dialog("widget").position({ my: "center", of: window, collision: "fit" });
		});

		jQuery('.fa-times-circle').on('click', function () {
			jQuery('#' + object.content_id).dialog("close");
		});
	});
});


// if any case we want to show the link on a customixed message
// jQuery(document).ready(function () {
//   //following //expire_password_lang_container span is written inside wp-content\plugins\Enzacta-WPML-custom-changes\lang\en.php,es.php,kr.php

//   var link_to_expire_pswd = '<a onclick="return openlostpwdform();" target="blank" class="expire_text_style" style="color:#299973!important;">' + lostpasswordservices_obj.lang_pwd_text_2 + '</a>';
//   var message_to_show = lostpasswordservices_obj.lang_pwd_text_1 + ' ' + link_to_expire_pswd + ' ' + lostpasswordservices_obj.lang_pwd_text_3;
//   jQuery('#lost_password_lang_container').html(message_to_show);
// });




function openlostpwdform() {
  jQuery(function () {
    jQuery("#lost_password_btn").trigger('click');
    jQuery("#password_field").val('');
    jQuery("#new_cpassword_field").val('');
    jQuery("#new_password_field").val('');
    jQuery("#new_cpassword_field").val('');
    jQuery('#lost-password-service-loader').html('');
    jQuery("#errorbox-lostpassword-step").hide();
    jQuery("#error-personal-ul").html('');
  });

}

/*function validatePasswordFieldsold() {



  if (jQuery("#password_field").val() == '' || jQuery("#password_field").val() == 'undefined' || jQuery("#new_password_field").val() == '' || jQuery("#new_password_field").val() == 'undefined' || jQuery("#new_cpassword_field").val() == '' || jQuery("#new_cpassword_field").val() == 'undefined') {
    return formatErrorJson('Fail', 'EMPTY');
  }

  if (jQuery("#new_password_field").val() != (jQuery("#new_cpassword_field").val())) {
    return formatErrorJson('Fail', 'MISMATCH');
  }

  var pattern = /(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[ !\"#$%&'()*+,-.\/:;<=>?@[\\\\\]^_`{|}~]).{7,}/;
  if (!pattern.test(jQuery("#new_password_field").val())) {
    return formatErrorJson('Fail', 'FORMATERROR');
  }
  return formatErrorJson('Success', 'Success');
}*/



function formatErrorJsonLostPassword(error_status, error_message,medium) {

  let jsonString = '{"Status":"' + error_status + '", "Message":"' + error_message + '","Medium":"'+medium+'"}';
  let errorObject = JSON.parse(jsonString);
  return errorObject;
}


function validateIBOInformation(){

  jQuery('#lost-password-service-loader').html('');
  var validateLostpwdObj = validateLostPasswordFields();
    if (validateLostpwdObj.Status == "Success") {
     var opt_medium_val = jQuery('input[name="opt_medium"]:checked').val();
    if(opt_medium_val=="email"){
      var input_val = jQuery('#email').val();
    }else if(opt_medium_val=="phone"){
       var input_val = jQuery('#phone').val();
    }else{
        var input_val = '';
    }
    jQuery("#errorbox-lostpassword-step").hide();
    jQuery("#error-personal-ul1").html('');
    return new Promise((resolve, reject) => {

      jQuery.ajax({
        type: "POST",
        // async: false,
        url: lostpasswordservices_obj.ajaxurl,
        data: {
          'action': 'lostpasswordservices_request',
          'nonce': lostpasswordservices_obj.nonce,
          'action_string': 'verify_ibo',
          'medium': opt_medium_val,
          'inputval': input_val,
          'langVal': lostpasswordservices_obj.lang_code
        },
        beforeSend: function (xhr) {
          var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
          var loader = "<img src='" + imgUrl + "load.gif' width='20%' />";
          jQuery('#lost-password-service-loader').html(loader);
        },
        success: function (res) {
          jQuery('#lost-password-service-loader').html('');
          resolve(res)
          var datavals = JSON.parse(res);
          showSecretCodeHTML(datavals);
          // if (datavals.Status == "Success") {
          //   handlePasswordChangeSuccess();
          // } else {
          //   handlePasswordChangeFails(datavals);
          // }
        },
        error: function (errorThrown) {
        }
      });
    })

  } else {
    handlePasswordChangeFails1(validateLostpwdObj);
  }

}


function showSecretCodeHTML(datavals){
                     jQuery("#contact_info_response").html('');
                     jQuery("#errorbox-lostpassword-step").hide();
                     jQuery("#error-personal-ul1").html("");
                     var contact_info_response ='';
                     if(datavals.Status == "Success") {          
                              contact_info_response += '<p id="code-vlidate-error" style="color:red;"></p><p class="po-mb-text po-mb-sp-pad">'+lostpasswordservices_obj.lang_pwd_6digit+'</p>'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig1" name="dig1" maxlength="1" onkeyup="FormatCode(1,this)">'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig2" name="dig2" maxlength="1" onkeyup="FormatCode(2,this)">'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig3" name="dig3" maxlength="1" onkeyup="FormatCode(3,this)">'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig4" name="dig4" maxlength="1" onkeyup="FormatCode(4,this)">'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig5" name="dig5" maxlength="1" onkeyup="FormatCode(5,this)">'; 
                              contact_info_response += '<input class="po-mb-field-code" type="text" id="dig6" name="dig6" maxlength="1" onkeyup="FormatCode(6,this)">'; 
                              contact_info_response += '<p class="po-mb-text-quote"><a class="po-mb-text-button" onclick="validateIBOInformation();">'+lostpasswordservices_obj.lang_pwd_click_here+'</a> '+lostpasswordservices_obj.lang_pwd_to_change_it+'</p>'; 
                              contact_info_response += '<input type="hidden" name="code_received" id="code_received">';
                              //jQuery('#save_btn_pwd_block').hide();
                              jQuery("#contact_info_response").html(contact_info_response); 
                      }else{
                          contact_info_response = lostpasswordservices_obj.lang_pwd_error_validating;
                          var errorhtml = '<li>' + contact_info_response + '</li>';
                          jQuery("#errorbox-lostpassword-step").show("slow");
                          jQuery("#error-personal-ul1").html(errorhtml);
                      }
                       

}



          function FormatCode(val,object){
            if(validateNumber(object)){
               var ToFocus = val+1;
               jQuery("#dig"+ToFocus+"").focus();
               var codeFields = codeFieldsJson();
               var formatted_code = formatCodeFields(codeFields);
               if(formatted_code.length=='6'){
                startCodeVerification(object);
               }
              }
            }

            
             function validateNumber(object){
                var value=jQuery("#" + object.id + "").val();
                var intRegex = /^\d+$/;
                if(intRegex.test(value)){
                      return true;
                }else{
                    jQuery("#" + object.id + "").val('');
                    //jQuery("#" + object.id + "").addClass('po-mb-field-code po-mb-warning-field');
                    return false;
                }
             }

      function formatCodeFields(FormFields){
        var val='';
        jQuery.each(FormFields, function (i, object) {
          val += jQuery("#" + object.field_id + "").val();
        });
        return val;
     }


      function codeFieldsJson(){

        var codeFields = [{ field_id: "dig1", label: "Code1", required: 1},{ field_id: "dig2", label: "Code1", required: 1},
                               { field_id: "dig3", label: "Code1", required: 1},{ field_id: "dig4", label: "Code1", required: 1},
                               { field_id: "dig5", label: "Code1", required: 1},{ field_id: "dig6", label: "Code1", required: 1}];
           
          return codeFields;
       }         

  function startCodeVerification(){
     var codeval = jQuery("#dig1").val()+""+jQuery("#dig2").val()+""+jQuery("#dig3").val()+""+jQuery("#dig4").val()+""+jQuery("#dig5").val()+""+jQuery("#dig6").val();
     var opt_medium_sel = jQuery('input[name="opt_medium"]:checked').val();
     if(opt_medium_sel=="email"){
        var medVal=jQuery("#email").val();
     }else{
        var medVal=jQuery("#phone").val();
        medVal = medVal.replace(/\D/g,'');
     }

     jQuery.ajax({
        type: "POST",
        // async: false,
        url: lostpasswordservices_obj.ajaxurl,
        data: {
          'action': 'lostpasswordservices_request',
          'nonce': lostpasswordservices_obj.nonce,
          'action_string': 'verify_code',
          'codeval': codeval,
          'medium': opt_medium_sel,
          'mediumval': medVal
        },
        beforeSend: function (xhr) {
          var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
          var loader = "<img src='" + imgUrl + "load.gif' width='20%' />";
          jQuery('#lost-password-service-loader').html(loader);
        },
        success: function (res) {
         var datavals = JSON.parse(res);
         jQuery('#lost-password-service-loader').html("");
         if(datavals.id>0){
          jQuery('#save_btn_pwd_block').html("");
          var resetPasswordForm="<div id='errorbox-expirepassword-step1' class='EJ-warning-field-container' style='display:none'><div class='EJ-warning-icon'><p class='EJ-form-fa-icon-warning'><i class='fas fa-exclamation-circle'></i></p></div><div class='EJ-warning-info'><div class='EJ-warning-info-txt'><p class='warning-info'>"+lostpasswordservices_obj.lang_pwd_msg_common+"</p></div>";
          resetPasswordForm +="<div id='errorwarninglist' class='EJ-warning-list'><ul id='error-reset_pwd-ul' class='EJ-warning-missing-fields'></ul></div></div><span class='cf'></span></div><div class='EJ-mbox-foreigners-text'><table><tr>";
          resetPasswordForm +="<td>"+lostpasswordservices_obj.lang_pwd_new+"</td><td width=''><input type='password'  class='EJ-form-field' id='new_password_field1' name='new_password_field1'></td></tr>";
          resetPasswordForm +="<tr><td></td><td width=''><span class='EJ-form-field-note' style='display: block;margin-left: left;white-space: pre-wrap;'>"+lostpasswordservices_obj.lang_pwd_format+"</span></td></tr>"; 
				  resetPasswordForm +="<tr><td>"+lostpasswordservices_obj.lang_pwd_verify+"</td><td width=''><input type='password'  class='EJ-form-field' id='new_cpassword_field1' name='new_cpassword_field1'></td></tr></table></div>";
          resetPasswordForm +="<div id='lost-password-service-loader'></div>";
          resetPasswordForm +="<div id='save_btn_pwd_block'><div class='EJ-continue-button cursor-block'><a class='EJ-continue-button-text fit-to-parent' onclick='sendLostPasswordInfoNew();'>"+lostpasswordservices_obj.lang_pwd_save+"</a></div></div>";
          jQuery('#contact_info_response').html(resetPasswordForm);
         }else{
          jQuery("#code-vlidate-error").html(lostpasswordservices_obj.lang_pwd_6digit_invalid);
          jQuery(".po-mb-field-code").val("");
          jQuery("#dig1").focus();
         }
        },
        error: function (errorThrown) {
        }
      });

  }
function sendLostPasswordInfoNew(){
  jQuery('#lost-password-service-loader').html('');
  var newpassword = jQuery("#new_password_field1").val();
  var new_cpassword = jQuery("#new_cpassword_field1").val();

  var validatePassworObj = validatePasswordFieldsNew();
  if (validatePassworObj.Status == "Success") {
    jQuery("#errorbox-expirepassword-step1").hide();
    jQuery("#error-reset_pwd-ul").html('');
    return new Promise((resolve, reject) => {

      jQuery.ajax({
        type: "POST",
        // async: false,
        url: lostpasswordservices_obj.ajaxurl,
        data: {
          'action': 'lostpasswordservices_request',
          'nonce': lostpasswordservices_obj.nonce,
          'action_string': 'resetpassword',
          'newpassword': newpassword,
          'cpassword': new_cpassword
        },
        beforeSend: function (xhr) {
          var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
          var loader = "<img src='" + imgUrl + "load.gif' width='20%' />";
          jQuery('#lost-password-service-loader').html(loader);
        },
        success: function (res) {
          jQuery('#lost-password-service-loader').html('');
          resolve(res)

          var datavals = JSON.parse(res);
          if (datavals.Status == "Success") {
            handlePasswordChangeSuccessNew();
          } else {
            handlePasswordChangeFailsNew(datavals);
          }
        },
        error: function (errorThrown) {
        }
      });
    })

  } else {
    handlePasswordChangeFailsNew(validatePassworObj);
  }
}
function handlePasswordChangeSuccessNew() {

  jQuery('#lost-password-service-loader').html('');
  var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
  var loader = jQuery('<center></center>').html("<br>" + lostpasswordservices_obj.lang_pwd_success + "<br><img src='" + imgUrl + "load.gif' width='20%' />");
  jQuery('#lost-password-service-loader').append(loader);
  jQuery('#cancel-box-circle').html('');
  jQuery('#save_btn_pwd_block').html('');
  if (lostpasswordservices_obj.lang_code == 'ko') {
    var myaccount = 'my-account';
  } else {
    var myaccount = 'my-account-4';
  }
  window.location.replace(location.protocol + '//' + window.location.hostname + lostpasswordservices_obj.domainsubsite + "/" + lostpasswordservices_obj.country + '/' + myaccount + '?lang=' + lostpasswordservices_obj.lang_code);
}
function validatePasswordFieldsNew() {
  if (jQuery("#new_password_field1").val() == '' || jQuery("#new_password_field1").val() == 'undefined' || jQuery("#new_cpassword_field1").val() == '' || jQuery("#new_cpassword_field1").val() == 'undefined') {
    return formatErrorJson1('Fail', 'EMPTY');
  }

  if (jQuery("#new_password_field1").val() != (jQuery("#new_cpassword_field1").val())) {
    return formatErrorJson1('Fail', 'MISMATCH');
  }

  var pattern = /(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[ !\"#$%&'()*+,-.\/:;<=>?@[\\\\\]^_`{|}~]).{7,}/;
  if (!pattern.test(jQuery("#new_password_field1").val())) {
    return formatErrorJson1('Fail', 'FORMATERROR');
  }
  return formatErrorJson1('Success', 'Success');
}
function formatErrorJson1(error_status, error_message) {

  let jsonString = '{"Status":"' + error_status + '", "Message":"' + error_message + '"}';
  let errorObject = JSON.parse(jsonString);
  return errorObject;
}
function validateLostPasswordFields() {

    var opt_medium_sel = jQuery('input[name="opt_medium"]:checked').val();

    if (opt_medium_sel=="email"){
            if(jQuery("#email").val() == '' || jQuery("#email").val() == 'undefined'){
                    return formatErrorJsonLostPassword('Fail', 'EMPTYEMAIL','email');
                  }else{
                     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                     var result= re.test(String(jQuery("#email").val()).toLowerCase());
                     if(!result){
                       return formatErrorJsonLostPassword('Fail', 'EMPTYEMAIL','email');
                     }
                  }
            }else if(opt_medium_sel=="phone") {
               if (jQuery("#phone").val() == '' || jQuery("#phone").val() == 'undefined'){
                    return formatErrorJsonLostPassword('Fail', 'EMPTYPHONE','email');
                  }
            }else{
                   return formatErrorJsonLostPassword('Fail', 'EMPTY','');
            }

    return formatErrorJsonLostPassword('Success', 'Success','');
}



 jQuery("#phone").on("input", function () {
                         let value = jQuery(this).val().replace(/\D/g, "");
                         if (value.length > 3 && value.length <= 7) {
                            value = value.replace(/(\d{3})(\d+)/, "$1-$2");
                         } else if (value.length > 7) {
                            value = value.replace(/(\d{3})(\d{4})(\d+)/, "$1-$2-$3");
                         }
                         jQuery(this).val(value);
                         });	



/*function sendLostPasswordInfo() {

  jQuery('#lost-password-service-loader').html('');
  var password = jQuery("#password_field").val();
  var newpassword = jQuery("#new_password_field").val();
  var new_cpassword = jQuery("#new_cpassword_field").val();

  //console.log(password);
  var validatePassworObj = validatePasswordFields();
  //console.log(validatePassworObj.Status);
  if (validatePassworObj.Status == "Success") {
    jQuery("#errorbox-expirepassword-step1").hide();
    jQuery("#error-reset_pwd-ul").html('');
    return new Promise((resolve, reject) => {

      jQuery.ajax({
        type: "POST",
        // async: false,
        url: lostpasswordservices_obj.ajaxurl,
        data: {
          'action': 'lostpasswordservices_request',
          'nonce': lostpasswordservices_obj.nonce,
          'action_string': 'lostpassword',
          'password': password,
          'newpassword': newpassword,
          'cpassword': new_cpassword
        },
        beforeSend: function (xhr) {
          var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
          var loader = "<img src='" + imgUrl + "load.gif' width='20%' />";
          jQuery('#lost-password-service-loader').html(loader);
        },
        success: function (res) {
          jQuery('#lost-password-service-loader').html('');
          resolve(res)

          var datavals = JSON.parse(res);
          //console.log(datavals);
          if (datavals.Status == "Success") {
            handlePasswordChangeSuccess1();
          } else {
            handlePasswordChangeFails1(datavals);
          }
        },
        error: function (errorThrown) {
        }
      });
    })

  } else {
    handlePasswordChangeFails1(validatePassworObj);
  }
}*/



/*function handlePasswordChangeSuccess1() {

  jQuery('#lost-password-service-loader').html('');
  var imgUrl = lostpasswordservices_obj.plugin_url + "assets/imgs/";
  var loader = jQuery('<center></center>').html("<br>" + lostpasswordservices_obj.lang_pwd_success + "<br><img src='" + imgUrl + "load.gif' width='20%' />");
  jQuery('#lost-password-service-loader').append(loader);
  jQuery('#cancel-box-circle').html('');
  jQuery('#save_btn_pwd_block').html('');
  if (lostpasswordservices_obj.lang_code == 'ko') {
    var myaccount = 'my-account';
  } else {
    var myaccount = 'my-account-4';
  }
  window.location.replace(location.protocol + '//' + window.location.hostname + lostpasswordservices_obj.domainsubsite + "/" + lostpasswordservices_obj.country + '/' + myaccount + '?lang=' + lostpasswordservices_obj.lang_code);
}*/


function handlePasswordChangeFails1(datavals) {

  var error_code = '';
  var error_disp = '';
  var errorhtml = '';
  error_code = datavals.Message;

  if (error_code == "MISMATCH") {
    error_disp = lostpasswordservices_obj.lang_pwd_value_not_matching;
  } else if (error_code == "NOINPUTS") {
    error_disp = error_code;
  } else if (error_code == "FORMATERROR") {
    error_disp = lostpasswordservices_obj.lang_pwd_format_error;
  } else if (error_code == "CURRENTNOTMATCH") {
    error_disp = lostpasswordservices_obj.lang_pwd_not_match;
  } else if (error_code == "EMPTYEMAIL") {
    error_disp = lostpasswordservices_obj.lang_pwd_valid_email;
  } else if (error_code == "EMPTYPHONE") {
    error_disp = lostpasswordservices_obj.lang_pwd_valid_phone;
  }else if (error_code == "EMPTY") {
    error_disp = lostpasswordservices_obj.lang_pwd_fields_select;
  }else {
    error_code = error_disp;
  }
   errorhtml += '<li>' + error_disp + '</li>';
   jQuery("#errorbox-lostpassword-step").hide();
   jQuery("#error-personal-ul1").html('');
  
  jQuery("#errorbox-lostpassword-step").show("slow");
  jQuery("#error-personal-ul1").html(errorhtml);

}
function handlePasswordChangeFailsNew(datavals) {

  var error_code = '';
  var error_disp = '';
  var errorhtml = '';
  error_code = datavals.Message;
  if (error_code == "MISMATCH") {
    error_disp = lostpasswordservices_obj.lang_pwd_value_not_matching;
  } else if (error_code == "NOINPUTS") {
    error_disp = error_code;
  } else if (error_code == "FORMATERROR") {
    error_disp = lostpasswordservices_obj.lang_pwd_format_error;
  } else if (error_code == "CURRENTNOTMATCH") {
    error_disp = lostpasswordservices_obj.lang_pwd_not_match;
  } else if (error_code == "EMPTY") {
    error_disp = lostpasswordservices_obj.lang_pwd_fields_empty;
  } else {
    error_code = error_disp;
  }
   errorhtml += '<li>' + error_disp + '</li>';
   jQuery("#errorbox-expirepassword-step1").hide();
   jQuery("#error-reset_pwd-ul").html('');
  jQuery("#errorbox-expirepassword-step1").show("slow");
  jQuery("#error-reset_pwd-ul").html(errorhtml);

}

jQuery(document).ready(function() {
    // Select all radio buttons with a specific name (e.g., 'radioName')
    jQuery('input[name="opt_medium"]').change(function() {
        // This function will execute whenever a radio button in the group changes its checked state.

        // To get the value of the currently selected radio button:
        var selectedValue = jQuery('input[name="opt_medium"]:checked').val();
      
        if(selectedValue == "email"){
            jQuery("#phone_container").hide();
            jQuery("#email_container").show();
        }else{
            jQuery("#email_container").hide();
            jQuery("#phone_container").show();
        }

        
    });
});


