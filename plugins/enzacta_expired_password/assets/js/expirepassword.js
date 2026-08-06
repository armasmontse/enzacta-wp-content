var expirepassword = [{ handler_id: "expire_password_btn", content_id: "expire_password_form" }];


jQuery(document).ready(function () {
  //following //expire_password_lang_container span is written inside wp-content\plugins\Enzacta-WPML-custom-changes\lang\en.php,es.php,kr.php

  var link_to_expire_pswd = '<a onclick="return openexpirepwdform();" target="blank" class="expire_text_style expire-a-link" style="color:#299973!important;">' + expirepasswordservices_obj.lang_pwd_text_2 + '</a>';
  var message_to_show = expirepasswordservices_obj.lang_pwd_text_1 + ' ' + link_to_expire_pswd + ' ' + expirepasswordservices_obj.lang_pwd_text_3;
  jQuery('#expire_password_lang_container').html(message_to_show);
});

jQuery(function () {
  jQuery.each(expirepassword, function (i, object) {
    jQuery('#' + object.content_id).dialog({
      autoOpen: false, modal: true, title: '', width: 'auto', height: 'auto',
      open: function (event, ui) {
        jQuery(".ui-widget-overlay").click(function () {
          jQuery('#' + object.content_id).dialog('close');
        });

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



function openexpirepwdform() {
  jQuery(function () {
    jQuery("#expire_password_btn").trigger('click');
    jQuery("#password_field").val('');
    jQuery("#new_cpassword_field").val('');
    jQuery("#new_password_field").val('');
    jQuery("#new_cpassword_field").val('');
    jQuery('#expire-password-service-loader').html('');
    jQuery("#errorbox-expirepassword-step").hide();
    jQuery("#error-personal-ul").html('');
  });

}

function validatePasswordFields() {



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
}



function formatErrorJson(error_status, error_message) {

  let jsonString = '{"Status":"' + error_status + '", "Message":"' + error_message + '"}';
  let errorObject = JSON.parse(jsonString);
  return errorObject;
}



function sendExpirePasswordInfo() {

  jQuery('#expire-password-service-loader').html('');
  var password = jQuery("#password_field").val();
  var newpassword = jQuery("#new_password_field").val();
  var new_cpassword = jQuery("#new_cpassword_field").val();

  //console.log(password);
  var validatePassworObj = validatePasswordFields();
  //console.log(validatePassworObj.Status);
  if (validatePassworObj.Status == "Success") {
    jQuery("#errorbox-expirepassword-step").hide();
    jQuery("#error-personal-ul").html('');
    return new Promise((resolve, reject) => {

      jQuery.ajax({
        type: "POST",
        // async: false,
        url: expirepasswordservices_obj.ajaxurl,
        data: {
          'action': 'expirepasswordservices_request',
          'nonce': expirepasswordservices_obj.nonce,
          'action_string': 'expirepassword',
          'password': password,
          'newpassword': newpassword,
          'cpassword': new_cpassword
        },
        beforeSend: function (xhr) {
          var imgUrl = expirepasswordservices_obj.plugin_url + "assets/imgs/";
          var loader = "<img src='" + imgUrl + "load.gif' width='20%' />";
          jQuery('#expire-password-service-loader').html(loader);
        },
        success: function (res) {
          jQuery('#expire-password-service-loader').html('');
          resolve(res)

          var datavals = JSON.parse(res);
          //console.log(datavals);
          if (datavals.Status == "Success") {
            handlePasswordChangeSuccess();
          } else {
            handlePasswordChangeFails(datavals);
          }
        },
        error: function (errorThrown) {
        }
      });
    })

  } else {
    handlePasswordChangeFails(validatePassworObj);
  }
}



function handlePasswordChangeSuccess() {

  //  jQuery("#errorbox-expirepassword-step").hide();
  //  jQuery('#expire_password_form').dialog('close');
  //  jQuery('.woocommerce-error').removeClass('woocommerce-error').addClass('woocommerce-message');
  //  jQuery(".woocommerce-message").css("border-top-color", "#299973");
  //  jQuery('#password_expire_container').html(expirepasswordservices_obj.lang_pwd_success);

  jQuery('#expire-password-service-loader').html('');
  var imgUrl = expirepasswordservices_obj.plugin_url + "assets/imgs/";
  var loader = jQuery('<center></center>').html("<br>" + expirepasswordservices_obj.lang_pwd_success + "<br><img src='" + imgUrl + "load.gif' width='20%' />");
  jQuery('#expire-password-service-loader').append(loader);
  jQuery('#cancel-box-circle').html('');
  jQuery('#save_btn_block').html('');
  if (expirepasswordservices_obj.lang_code == 'ko') {
    var myaccount = 'my-account';
  }else if (expirepasswordservices_obj.lang_code == 'es') {
    var myaccount = 'mi-cuenta';
  } else {
    var myaccount = 'my-account-4';
  }
  window.location.replace(location.protocol + '//' + window.location.hostname + expirepasswordservices_obj.domainsubsite + "/" + expirepasswordservices_obj.country + '/' + myaccount + '?lang=' + expirepasswordservices_obj.lang_code);
}


function handlePasswordChangeFails(datavals) {

  var error_code = '';
  var error_disp = '';
  var errorhtml = '';
  error_code = datavals.Message;

  if (error_code == "MISMATCH") {
    error_disp = expirepasswordservices_obj.lang_pwd_value_not_matching;
  } else if (error_code == "NOINPUTS") {
    error_disp = error_code;
  } else if (error_code == "FORMATERROR") {
    error_disp = expirepasswordservices_obj.lang_pwd_format_error;
  } else if (error_code == "CURRENTNOTMATCH") {
    error_disp = expirepasswordservices_obj.lang_pwd_not_match;
  } else if (error_code == "EMPTY") {
    error_disp = expirepasswordservices_obj.lang_pwd_fields_empty;
  } else {
    error_code = error_disp;
  }
   errorhtml += '<li>' + error_disp + '</li>';
   jQuery("#errorbox-expirepassword-step").hide();
   jQuery("#error-personal-ul").html('');
  // if (error_code == "NOINPUTS" || error_code == "EMPTY") {
  //   var PasswordFields = [{ field_id: "password_field"}, { field_id: "new_password_field"}, { field_id: "new_cpassword_field", label: "new_cpassword_field" }];
  //   jQuery.each(PasswordFields, function (i, object) {
  //     // Remove error warnings for valid inputs and Avoid the repetion of same field validation
  //    jQuery("#" + object.field_id + "").removeClass('EJ-warning-field');
  //     if (typeof jQuery("#" + object.field_id + "").attr("class") !== "undefined") {
  //       jQuery("#" + object.field_id + "").removeClass('EJ-warning-field');
  //     }
  //     if (jQuery("#" + object.field_id + "").val() == '') {
  //       jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
  //     }
  //   });
  // }
  jQuery("#errorbox-expirepassword-step").show("slow");
  jQuery("#error-personal-ul").html(errorhtml);

}




