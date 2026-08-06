document.addEventListener('DOMContentLoaded', () => {

  const tabs = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.tab-content');
  const accHeaders = document.querySelectorAll('.accordion-header');

  let activeTab =
  document.querySelector('.tab.activo')?.dataset.tab ||
  document.querySelector('.tab')?.dataset.tab ||
  'cdmx';

  let isDesktop = window.innerWidth > 767;

  function activateTab(tabId) {
  tabs.forEach(t => t.classList.toggle('activo', t.dataset.tab === tabId));
  tabContents.forEach(c => c.classList.toggle('activo', c.id === tabId));
  activeTab = tabId;
  closeAllAccordionBodies();
  }

  function closeAllAccordionBodies() {
  tabContents.forEach(tc => {
    const body = tc.querySelector('.accordion-body');
    const hdr  = tc.querySelector('.accordion-header');
    if (body) body.classList.remove('open');
    if (hdr) hdr.classList.remove('active');
  });
  }

  // Tabs (desktop)
  tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    activateTab(tab.dataset.tab);
  });
  });

  // Accordion (mobile)
  accHeaders.forEach(header => {
  header.addEventListener('click', () => {
    const container = header.closest('.tab-content');
    const body = container.querySelector('.accordion-body');

    tabContents.forEach(tc => {
      if (tc !== container) {
        tc.querySelector('.accordion-body')?.classList.remove('open');
        tc.querySelector('.accordion-header')?.classList.remove('active');
      }
    });

    body.classList.toggle('open');
    header.classList.toggle('active');
  });
  });

  function handleResize() {
  const nowDesktop = window.innerWidth > 767;
  
  if (nowDesktop !== isDesktop) {
    isDesktop = nowDesktop;

    if (isDesktop) {
      activateTab(activeTab);
    }
    else {
      tabContents.forEach(tc => tc.classList.remove('activo'));
      closeAllAccordionBodies();
    }

  }
  }

  handleResize();

  let resizeTimer;
  window.addEventListener('resize', () => {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(handleResize, 150);
  });

});

function validasteContactUSFields() {
  
var EmailLang ="Your Email*";
var ContactUSFields = [
  { field_id: "ibo_name", label: "Please enter a name*", required: 1 },
  { field_id: "phone", label: "Contact Phone Number*", required: 1, "attribute_settings":{"extra_validation":"MEXPhoneNumber","error_msg":"Please enter a valid mobile number*"}},
  { field_id: "email", label: ""+EmailLang+"", required: 1, "attribute_settings":{"extra_validation":"Email","error_msg":"Please enter a valid email address*"}},
  { field_id: "subject", label: "Subject*", required: 1 },
  { field_id: "message", label: "Your message*", required: 1 }
];

globalContactUSFields = ContactUSFields;
return StepsErrorHandlerContactUS(ContactUSFields, 'ContactInfo', 'errorbox-contact-step', 'error-contact-ul');

}

function validateEmail(object){

var EmailVal=jQuery("#" + object.field_id + "").val();
let errors ='';
const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var result= re.test(String(EmailVal).toLowerCase());
if(!result){
  errors = ['Error', object.attribute_settings.error_msg];
  jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
}

return errors;

}

function validateMEXPhoneNumber(object){

  let errors ='';
  var value=jQuery("#" + object.field_id + "").val();
  var intRegex = /^\d{10}$/;
  if(!intRegex.test(value)){
  errors = ['Error', object.attribute_settings.error_msg];
  jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
  }

  return errors;

}

function processExtraValidations(object){
  return window['validate' + object.attribute_settings.extra_validation](object);
}

function RestrictToNumbers(field_id){
  var textVal = jQuery(field_id).val();
  if(!/^[0-9]+$/.test(jQuery(field_id).val())){
    jQuery(field_id).val(textVal.replace(/\D/g,''));
  }
}

function ContactFormValidations() {
  var result = validasteContactUSFields();
  if (result) {
  sendContactUSInformation();
  }
}

function StepsErrorHandlerContactUS(FormFields, FireStoreObject, ErrorBox, ErrorElement) {
  var errorcontent = '';
  var errorcount = false;
  jQuery.each(FormFields, function (i, object) {
    jQuery("#" + object.field_id + "").removeClass('EJ-warning-field');
    //special check for international address
    if((jQuery("#hdnCCAdrsFlag").val()=="1" || jQuery("#hdnCCAdrsbackupFlag").val()=="1") ){
      if(jQuery("#billing_country").val()=="MX" && jQuery("#international_country").val()!="MX"){
      if( object.field_id=="billing_exterior_number" || object.field_id=="billing_address_2"){
        object.required=false;
      }
      if( object.field_id=="billing_state" && object.type=="select"){
        object.required=false;
      }
      }
      if(jQuery("#billing_country").val()=="US" && jQuery("#international_country").val()!="US"){
        if( object.field_id=="billing_state" && object.type=="select"){
          object.required=false;
        }
      }
    }
    
    if (object.required == 1) {
      if (jQuery("#" + object.field_id + "").val() == '') {
        jQuery("#" + ErrorBox + "").show("slow");
        jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
        errorcontent += '<li>' + object.label + '</li>';
        errorcount = true;
      }

      if (object.type == "radio") {
      if(!jQuery("input:radio[name=" + object.field_id + "]").is(":checked")) {
          jQuery("#" + ErrorBox + "").show("slow");
          jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
          errorcontent += '<li>' + object.label + '</li>';
          errorcount = true;
          
        };
      }
      
      if (object.type == "checkbox") {
        if(jQuery("input:checkbox[name=" + object.field_id + "]").filter(':checked').length < 1 ){
          jQuery("#" + ErrorBox + "").show("slow");
          //jQuery("#" + ErrorBox + "").css("display", "block");
          jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
          errorcontent += '<li>' + object.label + '</li>';
          errorcount = true;          
        }
      } 
      
      if (object.type == "hidden") {
    
        if(typeof jQuery("#" + object.field_id + "").val() == 'undefined'){
          jQuery("#" + ErrorBox + "").show("slow");
          jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
          errorcontent += '<li>' + object.label + '</li>';
          errorcount = true;
          
        };
      }
      if(object.type == "select") {
        //console.log(object.field_id+"-"+jQuery("#" + object.field_id + "").val()+"-");
          if(jQuery("#" + object.field_id + "") == '' || typeof jQuery("#" + object.field_id + "").val() == 'undefined' || jQuery("#" + object.field_id + "").val() == '0' || jQuery("#" + object.field_id + "").val() == null){
             jQuery("#" + ErrorBox + "").show("slow");
             jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
             errorcontent += '<li>' + object.label + '</li>';
             errorcount = true;  
          }
         }
    }
    //this condition is to do the extra validation if any extra validation is set on the custom fields through admin site for the field
     if(object.attribute_settings!=null && object.attribute_settings.extra_validation!=null){
      if (jQuery("#" + object.field_id + "").val() != '') {
        var extraerrors= processExtraValidations(object);
        if(extraerrors.length!=0){
          jQuery("#" + ErrorBox + "").show("slow");
          jQuery("#" + object.field_id + "").addClass('EJ-form-field EJ-warning-field');
          errorcontent += '<li>' + extraerrors[1] + '</li>';
          errorcount = true;
        }
      }
     } //end of extra validation for fields
     if((jQuery("#hdnCCAdrsFlag").val()=="1" || jQuery("#hdnCCAdrsbackupFlag").val()=="1") ){
      if(object.field_id=="billing_state_text"){
      if(jQuery("input#billing_state").val()==""){
        jQuery("#" + ErrorBox + "").show("slow");
        jQuery("input#billing_state").addClass('EJ-form-field EJ-warning-field');
        errorcontent += '<li>' + address_state_label + '</li>';
        errorcount = true;
      }
     }
     } 
  });
  
  if (errorcount) {
    jQuery("#" + ErrorElement + "").html(errorcontent);
    return false;
  } else {
    jQuery("#" + ErrorBox + "").hide("slow");
    return true;
  }
}

function sendContactUSInformation() {
    const btn = jQuery('.WP-contact-button');
    const originalText = btn.text();
    const banner = jQuery('#contact-response-banner');
    const messageBox = jQuery('#banner-message-box');
    const bannerText = jQuery('#banner-text');

    // 1. Reset state
    btn.prop('disabled', true).text('SENDING...');
    banner.hide(); 

    const formData = {
        action: 'handle_contact_form_submission',
        shortcode_tag: 'contact_us', 
        name: jQuery('#ibo_name').val(),
        phone: jQuery('#phone').val(),
        email: jQuery('#email').val(),
        subject: jQuery('#subject').val(),
        message: jQuery('#message').val()
    };

    jQuery.ajax({
        url: graphics_obj.ajaxurl,
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
            btn.prop('disabled', false).text(originalText);

            if (response && response.success) {
                // SUCCESS: Green Banner
                messageBox.removeClass('elementor-message-danger').addClass('elementor-message-success');
                bannerText.text("Your message has been sent successfully.");
                
                // Clear the form fields
                jQuery('.WP-contact-input, .WP-contact-textarea').val('');
            } else {
                // LOGIC ERROR: Red Banner
                messageBox.removeClass('elementor-message-success').addClass('elementor-message-danger');
                bannerText.text("Error: " + (response.data || "Something went wrong."));
            }
            
            // Show banner and scroll to it
            banner.fadeIn();
            jQuery('html, body').animate({ scrollTop: banner.offset().top - 150 }, 500);
        },
        error: function(xhr) {
            // SERVER REJECTION: Red Banner
            btn.prop('disabled', false).text(originalText);
            messageBox.removeClass('elementor-message-success').addClass('elementor-message-danger');
            bannerText.text("Status: " + xhr.status + " - The server rejected the request.");
            
            banner.fadeIn();
        }
    });
}