<?php

  /**
   * contents for short code pages go inside this page
  */
 
  wp_enqueue_style( 'content-styles', plugins_url('assets/css/style.css', __FILE__));
  wp_enqueue_script('content-js',plugins_url('assets/js/script.js', __FILE__ ), array(), false, true); 
  wp_localize_script('content-js','graphics_obj',array('ajaxurl' => admin_url('admin-ajax.php'),
                     'plugin_graphics_url' => PLUGIN_GRPHICS_URL,
                     'image_server_base_path'=>IMAGE_SERVER_BASE_PATH)); 
?>
<body>
	<div class="WP-home-promotion-container margintop60">
	<!-- Image that opens the modal -->
	<img 
		class="WP-home-promotion-imageback-special"
		id="openPdfModal"
		src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/images/RECOGNITION-2026_DIPLOMA_ENZACTA.png"
		alt="Recognition Certificate"
		style="cursor:pointer;"
	>
	</div>

	<!-- Modal container -->
	<div id="pdfModal" class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<!-- Embedded PDF fullscreen viewer -->
		<iframe 
		src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/docs/RECOGNITION-2026_DIPLOMA_ENZACTA.pdf"
		width="100%"
		height="100%"
		style="border:none;"
		></iframe>
	</div>
	</div>

	<div class="WP-home-description-container containerflexwrap margintop80">
		<div class="block03 WP-relative">
			<img class="amvd-cert-logo" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/images/LogoRecognition2026_ENZACTA.png">
		</div>
		<div class="block07">
			<h2 class="WP-amvd-title WP-title-text">LA ÉTICA EMPRESARIAL, UN TRAYECTO SEGURO HACIA EL ÉXITO</h2>
			<div class="WP-home-promotion-separator-green"></div>
			<p class="WP-home-description-text WP-normal-text">
				Para la Asociación Mexicana de Ventas Directas (AMVD) es un honor informarte que <b>ENZACTA</b> logró la <b>CERTIFICACIÓN EN EL CÓDIGO DE ÉTICA AMVD-WFDSA 2026 / GLOBAL CODE OF ETHICS INITIATIVE</b> promovida por la Federación Mundial de Asociaciones Venta Directa (WFDSA).<br><br>
				Nuestro más sincero reconocimiento a <b>ENZACTA</b>, por haber cumplido todos los criterios necesarios para lograr la renovación de esta importante certificación.<br><br>
				Muchas felicitaciones por todo el trabajo y esfuerzo realizado para el logro de este importante reconocimiento.
			</p>
			<p class="WP-congrats-text WP-normal-text">¡FELICITACIONES A TODOS LOS INTEGRANTES DE ENZACTA!</p>
			<img class="WP-amvd-logo" src="<?php echo IMAGE_SERVER_BASE_PATH;?>/sites/mx/images/AMVD-logo.jpg">
			<a href="https://enzactamedia.enzacta.com/ewp/sites/mx/docs/01.-Codigo-de-Etica-AMVD20260709.pdf" target="_blank" rel="noopener noreferrer" class="WP-amvd-button margintop20">Código de ética AMVD</a>
		</div>
	</div>
</body>
<?php
?>