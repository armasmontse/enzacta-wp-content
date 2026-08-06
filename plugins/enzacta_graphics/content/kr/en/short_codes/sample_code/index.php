<?php

  /**
   * contents for short code pages go inside this page
  */
 
  wp_enqueue_style( 'content-styles', plugins_url('assets/css/styles.css', __FILE__));
  wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array(), false, true); 

?>

	<!-- This is the area for HTML .Styles we can write on the above styles.css or common tempalte CSS file and scripts we can write on above files-->

  <!-- end of the area for HTML -->  
<?php 

?>